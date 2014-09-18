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
        $this->load->view('webmasters/howdy');
    }
    
    public function signup()
    {
        $this->load->view('templates/viewpal_header');
        $this->load->view('webmasters/wm_signupform');
    }
    
    public function newwm_welcome()
    {
        try{
            /** save user info into database here**/
            $name = $this->input->post('wmname');
            $pwd = $this->input->post('wmpwd');
            $email = $this->input->post('wmemail');
            $website = $this->input->post('weburl');
            $this->wm_model->set_wm($name,$pwd,$email,$website);
            $wmname = $this->input->post('wmname');
            session_start();
            //echo $wmname;
            $_SESSION['wmname'] = $wmname;
            $data['wmname'] = $wmname;
            $this->load->view('templates/viewpal_header');
            $this->load->view('webmasters/welcome',$data); 
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
                //$data['mid'] = $mid;               
                $summary = $this->wm_model->get_summary($wmname);
                $data['summary'] = $summary;
                $this->load->view('webmasters/dashboard/header',$data);
                $this->load->view('webmasters/dashboard/dashboard',$data);
                $this->load->view('webmasters/dashboard/footer',$data);
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
