<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Webmasters extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('wm_model');
    }
    
    public function howdy()
    {
        $this->load->view('templates/viewpal_header');
        $this->load->view('users/webmasters/howdy');
    }
    
    public function signup()
    {
        $this->load->view('templates/viewpal_header');
        $this->load->view('users/webmasters/wm_signupform');
    }
    
    public function newwm_welcome()
    {
        try{
            /** save user info into database here**/
            $this->wm_model->set_wm();
            $wmname = $this->input->post('wmname');
            session_start();
            echo $wmname;
            $_SESSION['wmname'] = $wmname;
            $data['wmname'] = $wmname;
            $this->load->view('templates/viewpal_header');
            $this->load->view('users/webmasters/welcome',$data); 
        } catch (Exception $ex) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }        
    }
    
    public function login()
    {
        $wmname = $this->input->post("wmname");
        $status = $this->wm_model->login();
        if($status == 2)
        {
            //setcookie('vp_username', $username, time()+3600, '/vpaccount', base_url());
            session_start();
            $_SESSION['wmname'] = $wmname;
            echo $wmname;
            $dashboard = base_url()."index.php/webmaster/dashboard?wmname=".$wmname;
            header('Location:'.$dashboard);
        }
        else
        {
            echo 0;
        }        
    }
    
    public function logout()
    {
        session_start();
        unset($_SESSION['wmname']);
        header('Location: '.base_url());
    }
    
    public function dashboard()
    {
        session_start();
        $user_url_input = filter_input(INPUT_GET, 'wmname');
        if($user_url_input && isset($_SESSION['wmname']))
        {
            if( $user_url_input == $_SESSION['wmname']){
                $wmname = $_SESSION['wmname'];
                $mid = $this->wm_model->get_mid($wmname);
                $data['title'] = "Dashboard | ".$wmname;
                $data['wmname'] = $wmname;
                $data['mid'] = $mid;
                $this->load->view('templates/dashboard_header',$data);
                $this->load->view('users/webmasters/dashboard',$data);
            }else{
                //should show 403
                show_404();
            }
        }else
        {
            // should show 403.
            show_404();
        }
        
    }
}
