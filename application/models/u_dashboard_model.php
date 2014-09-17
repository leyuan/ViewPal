<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class u_dashboard_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_user_balance($username)
    {
        // get user's balance
        $sql = "select Balance from user_balance where Name='".$username."'";
        $query = $this->db->query($sql);
        if ($query->num_rows() == 1)
        {
           foreach ($query->result() as $row)
           {
             // echo $row->Balance;
              return $row->Balance;
           }
        }else{
            // show error page
        }
    }
    
    public function get_user_lastdate($username)
    {
        // get user's last payment date
        $sql = "select Last_date from user_balance where Name='".$username."'";
        $query = $this->db->query($sql);
        if ($query->num_rows() == 1)
        {
           foreach ($query->result() as $row)
           {
             // echo $row->Last_date;
              return $row->Last_date;
           }
        }else{
            // show error page
        }   
    }
    
    public function get_user_details($username)
    {
        $sql = "select * from payments where Name='".$username."'";
        return $this->db->query($sql);        
    }

}