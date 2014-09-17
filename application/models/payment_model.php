<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Payment_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function checkHistory($username, $url) {
        $flag = 0;
        $sql = "select Url from payments where Name='".$username."'";
        $query = $this->db->query($sql);
        foreach ($query->result() as $row)
        {
            if ($url == $row->Url)
            {
                $flag = 1;
            }
        }
        echo $flag;
    }
    
    public function checkBalance($username, $pagecost) {
        $sql = "select * from user_balance where Name='".$username."'";
        $query = $this->db->query($sql);
        if($query->num_rows() == 1)
        {
            foreach ($query->result() as $row)
            {
                $balance = $row->Balance;
                //echo $balance;
                if($balance >= $pagecost){
                    echo $balance;
                }else{
                    echo 0;
                }
            }
        }else {
            echo 0;
        }
        
        
    }
    
    public function set_payment($username,$mid,$pagecost,$domain,$page_url) {
        try {
            $sql = "select * from user_balance where Name='".$username."'";
            $query = $this->db->query($sql);
            foreach ($query->result() as $row)
            {
                $balance = $row->Balance;                
            }
            $new_balance = $balance - $pagecost;
            // update balance table
            $update_data = array('balance'=>$new_balance);
            $this->db->where('Name', $username);
            $this->db->update('user_balance',$update_data);
            // insert data into transaction
            $sql = "insert into PAYMENTS(Name,Mid,Domain,Url,Cost,Date) VALUES('".$username."','".$mid."','".$domain."','".$page_url."','".$pagecost."',NOW())";
            $this->db->query($sql);
            echo 1;
        } catch (Exception $ex) {
            echo $ex;
        }
    }
}
