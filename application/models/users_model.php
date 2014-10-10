<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Users_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
    
    public function get_users($name = FALSE) {
        if ($name === FALSE) {
            $query = $this->db->get('users');
            return $query->result_array();
        }
        
        $query = $this->db->get_where('user', array('name' => $name));
        return $query->row_array();
    }
    
    public function set_user($username,$email,$pwd) {
        $hashed_password = crypt($pwd);
        $data = array(
            'Name' => $username,
            'Email' => $email,
            'Pwd' => $hashed_password
        );

        return $this->db->insert('user', $data);          
    }
    
    public function set_user_account($username)
    {
        $sql = "insert into user_balance(Name, Last_date) values('".$username."', NOW())";
        $this->db->query($sql);
    }
      
    public function login_user() {
        /*
         * status 0 = can't find the user
         *        1 = pwd not match
         *        2 = okay! 
         */
        $username = $this->input->post('username');
        $pwd = $this->input->post('pwd');
        $sql = "select * from user where Name='".$username."'";
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
    
    public function get_user_balance($username)
    {
        $query = $this->db->get_where('users',array('name'=>$username));
        $row = $query->result();
        foreach ($query->result() as $row)
        {
            echo $row->balance;
        }
        
    }
    
    public function checkout($username,$amount,$new_balance_dollar)
    {   
        // get the lib
        require_once(APPPATH.'libraries/stripe/lib/Stripe.php');
        // set the api key (test mode)
        Stripe::setApiKey("sk_test_S7fxpIRxYJP0ifN1FGlkcJmF");
        // Get the credit card details submitted by the form
        $token = filter_input(INPUT_POST, 'stripeToken');
        // charge the card
        try {
            $charge = Stripe_Charge::create(array(
              "amount" => $amount, // amount in cents, again
              "currency" => "cad",
              "card" => $token,
              "description" => "payinguser@example.com")
            );
            // save transaction in transaction db
            $amount = $amount/100;
            $sql = "INSERT INTO user_transaction(Name,Amount,Date) VALUES('".$username."','".$amount."',now())";
            $this->db->query($sql);          
            // update data in balance db
            $sql = "UPDATE user_balance SET Balance='".$new_balance_dollar."', Last_date=now() where Name='".$username."'";
            $this->db->query($sql);
            
            return 1;
        } catch(Stripe_CardError $e) {
          // The card has been declined
            return 0;
        }
    }
    
}

