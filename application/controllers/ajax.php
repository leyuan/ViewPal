<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Ajax extends CI_controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('payment_model');
        $this->load->model('users_model');
        $this->load->library('session');
        $this->load->helper('cookie');
    }
    
    public function checkHistory() {
        $username  = $this->input->post("username");
        $url = $this->input->post("page_url");
        $this->payment_model->checkHistory($username, $url);
    }
    
    public function checkBalance() {
        $username = $this->input->post('username');
        $pagecost = $this->input->post('pagecost');
        $this->payment_model->checkBalance($username,$pagecost);
    }
    
    public function pay() {
        $username = $this->input->post('username');
        $mid = $this->input->post('mid');
        $pagecost = $this->input->post('pagecost');
        $domain = $this->input->post('domain');
        $page_url = $this->input->post('page_url');
        $this->payment_model->set_payment($username,$mid,$pagecost,$domain,$page_url);
    }
    
    public function login()
    {   
        $username = $this->input->post("username");
        $status = $this->users_model->login_user();
        if($status == 2)
        {
            $newdata = array('username' => $username);
            $this->session->set_userdata($newdata);
            $cookiedata = array('name' => 'vp_username', 'value' => $username, 'expire' => 3600);
            set_cookie($cookiedata);
            echo $username;
        }
        else
        {
            echo 0;
        }
    }
    
    public function logout() {
        $this->session->unset_userdata('username');
        $cookiedata = array('name' => 'vp_username', 'value' => '', 'expire' => 0);
        delete_cookie($cookiedata);        
        echo 1;
    }
}

