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
        $this->load->model('email_model');
        $this->load->library('session');
    }
    
    public function howdy()
    {
        $this->load->view('static/header');
        $this->load->view('webmasters/howdy');
    }
    
    public function signup()
    {
        $this->load->view('static/header');
        $this->load->view('webmasters/wm_signupform');
    }
    
    public function newwm_welcome()
    {
        try{
            /** save user info into database here**/
            $wmname = $this->input->post('wmname');
            $pwd = $this->input->post('wmpwd');
            $email = $this->input->post('wmemail');
            $website = $this->input->post('weburl');
            $webmaster_array = $this->wm_model->set_wm($wmname,$pwd,$email,$website);
            /** Send a notification email **/
            
            /** send confirmation email to webmaster **/
            try{
                $this->email_model->wm_confirmation($webmaster_array["id"], $webmaster_array["email"], $webmaster_array["code"]);
            } catch (Exception $ex) {
                echo 'Caught exception: ',  $ex->getMessage(), "\n";
            }
            /** set sessions for webmasters **/
            $session_data = array('wmname' => $wmname);
            $this->session->set_userdata($session_data);
            $data['wmname'] = $wmname;
            /** load views **/
            $this->load->view('templates/viewpal_header');
            $this->load->view('webmasters/welcome',$data); 
        } catch (Exception $ex) {
            echo 'Caught exception: ',  $ex->getMessage(), "\n";
        }        
    }
    
    public function login()
    {
        $wmname = $this->input->post("wmname");
        $status = $this->wm_model->login();
        if($status == 2)
        {
            //setcookie('vp_username', $username, time()+3600, '/vpaccount', base_url());
            //$_SESSION['wmname'] = $wmname;
            $session_data = array('wmname' => $wmname);
            $this->session->set_userdata($session_data);
            $dashboard = base_url()."webmaster/dashboard/".$wmname;
            header('Location:'.$dashboard);
            
        }
        else
        {
            echo 0;
        }        
    }
    
    public function logout()
    {
        $this->session->unset_userdata('wmname');
        header('Location: '.base_url());
    }
    
    public function dashboard($user_url_input)
    {
        $wmname = $this->session->userdata('wmname');
        if($user_url_input && isset($wmname))
        {
            if( $user_url_input == $wmname){
                
                $mid = $this->wm_model->get_mid($wmname);
                $data['title'] = "Dashboard | ".$wmname;
                $data['wmname'] = $wmname;
                //$data['mid'] = $mid;               
                $summary = $this->wm_model->get_summary($wmname);
                $data['summary'] = $summary;
                $data['payment_details'] = $this->wm_model->get_wm_details($mid);
                $this->load->view('webmasters/dashboard/header',$data);
                $this->load->view('webmasters/dashboard/dashboard',$data);
                $this->load->view('webmasters/dashboard/footer',$data);
            }else{
                //should show 403
                echo "hello2";
            }
        }else
        {
            // should show 403.
            echo "user input:".$user_url_input."<br>";
            echo "hello";
        }
        
    }
    
    public function test($var1) {
        echo "$var1";
    }
}
