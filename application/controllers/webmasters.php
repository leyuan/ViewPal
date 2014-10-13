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
            /** set sessions for webmasters **/
            $session_data = array('wmname' => $wmname);
            $this->session->set_userdata($session_data);
            /** Send a notification email **/
            
            /** send confirmation email to webmaster **/
            $mail_status = $this->email_model->wm_confirmation($webmaster_array["id"], $webmaster_array["email"], $webmaster_array["code"]);
            if($mail_status){
                $data['message'] = "Confirmation Email has been sent successfully";
            } else {
                $data['message'] = "Confirmation Email sent failed";
            }

            
            /** load views **/
            
            $data['wmname'] = $wmname;
            $this->load->view('static/header');
            $this->load->view('webmasters/welcome',$data);
        } catch (Exception $ex) {
            echo 'Caught exception: ',  $ex->getMessage(), "\n";
        }        
    }
    
    public function confirmation() {
        if(isset($_GET["id"]) && isset($_GET["email"]) && isset($_GET["code"])) {
            // do the verification here
            //http://localhost:8080/git/viewpal/webmaster/confirmation?id=vp543aee862ba91&email=wm3@w&code=59610742
            $wmname = $this->session->userdata('wmname');
            $mid = $_GET["id"];
            $email = $_GET["email"];
            $code = $_GET["code"];
            $verification = $this->wm_model->verify_wm($mid,$email,$code);
            if($verification) {
                // load view verified successfully
                //echo "verified successfully";
                $dashboard_url = base_url()."webmaster/dashboard/".$wmname;
                $data['conf_status'] = "Verification succeed";
                $data['message'] = "<h3>Verified Successfully</h3>";
                $data['message'] .= "<a href='".$dashboard_url."'>checkout your dashboard here</a>";
                $this->load->view('static/header');
                $this->load->view('webmasters/confirmation', $data);
                
            } else {
                // oops something is wrong, please contact webmaster
                //echo "sorry something is wrong";
                $data['conf_status'] = "Verification failed";
                $data['message'] = "<h3>Please contact our customer service</h3>";
                $data['message'] .= "<a>contact.viewpal@gmail.com</a>";
                $this->load->view('static/header');
                $this->load->view('webmasters/confirmation', $data);
            }
        }else {
            // show 403
                //echo "Missing parameters";
                $data['conf_status'] = "Parameters are missing";
                $data['message'] = "<h3>Please contact our customer service</h3>";
                $data['message'] .= "<a>contact.viewpal@gmail.com</a>";
                $this->load->view('static/header');
                $this->load->view('webmasters/confirmation', $data);
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
            /** get variable in url && user is logged in **/
            if( $user_url_input == $wmname){
                /** logged in name matches input url **/
                if( $this->wm_model->checkv_wm($wmname)) {
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
                } else {
                    // haven't verified yet
                    echo "Please verify your account first";
                }
            }else{
                //trying to visit others' dashboard
                echo "please check your webmaster name in the url";
            }
        }else
        {
            // either not logged in or wrong user name in url
            echo "user input:".$user_url_input."<br>";
            echo "either not logged in or wrong user name in url";
        }
        
    }
    
    public function test() {
        $var1 = $_GET["var"];
        echo "$var1";
    }
}
