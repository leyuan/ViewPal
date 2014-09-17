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
    
    public function set_wm(){
        $hashed_password = crypt($this->input->post('wmpwd'));
        $prefix = "vp";
        $mid = $prefix.uniqid();
        $data = array(
            'Mid' => $mid,
            'Name' => $this->input->post('wmname'),
            'Email' => $this->input->post('wmemail'),
            'Pwd' => $hashed_password,
            'website_url' => $this->input->post('weburl')
        );

        return $this->db->insert('webmaster', $data);  
    }
    
    public function login() {
        /*
         * status 0 = can't find the user
         *        1 = pwd not match
         *        2 = okay! 
         */
        $wmname = $this->input->post('wmname');
        $pwd = $this->input->post('wmpwd');
        $sql = "select * from Webmaster where Name='".$wmname."'";
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
}

