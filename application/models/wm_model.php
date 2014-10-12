<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Wm_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function set_wm($name,$pwd,$email,$website){
        $hashed_password = crypt($pwd);
        $prefix = "vp";
        $mid = $prefix.uniqid();
        /** get a random confirm id **/
        $code=rand(100000,100000000);
        $data = array(
            'Mid' => $mid,
            'Name' => $name,
            'Email' => $email,
            'Pwd' => $hashed_password,
            'website_url' => $website,
            'Confirm_id' => $code
        );
        $this->db->set('Date', 'NOW()', FALSE);
        $this->db->insert('webmaster', $data);
        
        $webmaster = array();
        $webmaster["id"] = $mid;
        $webmaster["email"] = $email;
        $webmaster["code"] = $code;
        return $webmaster;
    }
    
    public function verify_wm($mid, $email, $code){
       $query = $this->db->get_where('webmaster', array('Mid' => $mid));
       $row = $query->row();
       if($email == $row->Email && $code == $row->Confirm_Id) {
            // change verfication value to 1
            $data = array('Verified' => 1);
            $this->db->where('Mid', $mid);
            $this->db->update('webmaster', $data); 
            return true;
       } else {
            return false;
       }
       
    }
    
    public function login() {
        /*
         * status 0 = can't find the user
         *        1 = pwd not match
         *        2 = okay! 
         */
        $wmname = $this->input->post('wmname');
        $pwd = $this->input->post('wmpwd');
        $sql = "select * from webmaster where Name='".$wmname."'";
        $query = $this->db->query($sql);
        foreach ($query->result() as $row)
        {
            $hashed_password = $row->Pwd;
            //echo $hashed_password;
            if ($hashed_password == crypt($pwd, $hashed_password))
            {
                return 2;
            }
            else
            {
                return 1;
            }
        }
        return 0;
    }
    
    public function get_mid($wmname) {
        $sql = "select mid from webmaster where Name='".$wmname."'";
        $query = $this->db->query($sql);
        if($query->num_rows() == 1){
            foreach ($query->result() as $row){
                $mid = $row->mid;
                return $mid;
            }
        }else{
            // show erro page
            return false;
        }
    }
    
    public function get_summary($wmname) {
        $query = $this->db->get_where('webmaster', array("Name"=>$wmname));
        if($query->num_rows() > 0)
        {
            $row = $query -> row();
            $summary = array();
            $mid = $row->Mid;
            $summary['mid'] = $mid;
            $summary['date'] = $row->Date;
            
            // get number of transactions
            $sql2 = "select COUNT(Id) as Transaction from payments where Mid='".$mid."'";
            $query = $this->db->query($sql2);
            $row2 = $query -> row();
            $transaction = $row2 -> Transaction;
            $summary['transaction'] = $transaction;
            
            // get total money earned
            $sql3 = "select SUM(Cost) as Total from payments where Mid='".$mid."'";
            $query = $this->db->query($sql3);
            $row3 = $query -> row();
            $total = $row3 -> Total;
            $summary['total'] = $total;
            
            return $summary;
        }
        
    }
    
    public function get_wm_details($mid)
    {
        $sql = "select * from payments where Mid='".$mid."'";
        return $this->db->query($sql);
    }
}

