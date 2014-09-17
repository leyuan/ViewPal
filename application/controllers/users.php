<?php

class Users extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->model('u_dashboard_model');
        
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
            $this->users_model->set_user();
            $username = $this->input->post('username');
            $this->users_model->set_user_account($username);

            session_start();
            $_SESSION['username'] = $username;
            $this->load->view('templates/viewpal_header');
            $this->load->view('users/newuser_welcome'); 
        } catch (Exception $ex) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

    }
    
    public function dashboard()
    {
        session_start();
        $user_url_input = filter_input(INPUT_GET, 'username');
        if($user_url_input && isset($_SESSION['username']))
        {
            if( $user_url_input == $_SESSION['username']){
                $username = $_SESSION['username'];
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
            session_start();
            $_SESSION['username'] = $username;
            echo $username;
        }
        else
        {
            echo 0;
        }
    }
    
    public function logout()
    {
        session_start();
        unset($_SESSION['username']);
        header('Location: '.base_url());
    }
    
    public function checkout()
    {
        session_start();
        $username = $_SESSION['username'];
        $balance_dollar = $this->u_dashboard_model->get_user_balance($username);
        $balance_cent = $balance_dollar * 100;
        $amount = 500.00;        
        $new_balance_cent = $balance_cent + $amount;
        $new_balance_dollar = $new_balance_cent/100;
        $status = $this->users_model->checkout($username,$amount,$new_balance_dollar);
        if($status == 1)
        {
            $this->load->view('templates/viewpal_header');
            $this->load->view('users/transaction_done.php');
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

