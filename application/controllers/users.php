<?php

class Users extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->model('u_dashboard_model');
        $this->load->library('session');
        
    }
    
    public function signup_user()
    {
        $this->load->view('templates/viewpal_header');
        $this->load->view('users/usersignupform');
    }
    
    public function newuser_welcome()
    {
        try{
            /** save user info into database here**/
            $username = $this->input->post('username');
            if(isset($username)){
                $email = $this->input->post('email');
                $pwd = $this->input->post('pwd');
                $this->users_model->set_user($username,$email,$pwd);
                $this->users_model->set_user_account($username);

                //set session
                $newdata = array('username' => $username);
                $this->session->set_userdata($newdata);
                //set data
                $data['username'] = $username;
                $this->load->view('templates/viewpal_header');
                $this->load->view('users/newuser_welcome',$data);
            } else {
                show_404();
            }
        } catch (Exception $ex) {
            echo 'Caught exception: ',  $ex->getMessage(), "\n";
        }

    }
    
    public function dashboard()
    {
        //session_start();
        $user_url_input = filter_input(INPUT_GET, 'username');
        $username = $this->session->userdata('username');
        
        if($user_url_input && isset($username))
        {
            if( $user_url_input == $username){
                //$username = $_SESSION['username'];
                
                $balance = $this->u_dashboard_model->get_user_balance($username);
                $lastdate = $this->u_dashboard_model->get_user_lastdate($username);
                
                $data['title'] = "Dashboard | ".$username;
                $data['username'] = $username;
                $data['balance'] = $balance;
                $data['lastdate'] = $lastdate;
                $data['payment_details'] = $this->u_dashboard_model->get_user_details($username);
                /*
                $this->load->view('templates/dashboard_header',$data);
                $this->load->view('users/dashboard',$data);
                $this->load->view('templates/footer');
                 * 
                 */
                // Using Admin Template instead of original one
                $this->load->view('dashboard/header', $data);
                $this->load->view('dashboard/dashboard', $data);
                $this->load->view('dashboard/footer');
                
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
    
    public function login()
    {   
        $username = $this->input->post("username");
        $status = $this->users_model->login_user();
        if($status == 2)
        {
            //setcookie('vp_username', $username, time()+3600, '/vpaccount', base_url());
            //session_start();
            //$_SESSION['username'] = $username;
            $newdata = array('username' => $username);
            $this->session->set_userdata($newdata);
            echo $username;
        }
        else
        {
            echo 0;
        }
    }
    
    public function logout()
    {
        //session_start();
        //unset($_SESSION['username']);
        $this->session->unset_userdata('username');
        header('Location: '.base_url());
    }
    
    public function checkout()
    {
        // Set transac into db
        $username = $this->session->userdata('username');
        $balance_dollar = $this->u_dashboard_model->get_user_balance($username);
        $balance_cent = $balance_dollar * 100;
        $amount = 500.00;        
        $new_balance_cent = $balance_cent + $amount;
        $new_balance_dollar = $new_balance_cent/100;
        $status = $this->users_model->checkout($username,$amount,$new_balance_dollar);
        
        $data['username'] = $username;
        if($status == 1)
        {
            $this->load->view('templates/viewpal_header');
            $this->load->view('users/transaction_done.php',$data);
            $this->load->view('templates/footer');
        }else{
            $this->load->view('templates/transaction_error.php');
        }

        
    }
    
    public function test()
    {
        require_once(APPPATH.'libraries/stripe/lib/Stripe.php');
        echo APPPATH;
        echo "okay";
    }
    
    public function transaction()
    {
        
        $this->users_model->transaction();
        
    }
}

