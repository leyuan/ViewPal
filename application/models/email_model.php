<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Email_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        
    }
    
    public function wm_confirmation($wm_id, $wm_email, $wm_code) {
        $subject = "ViewPal Email Verification mail";
        $headers = "From: contact.viewpal@gmail.com \r\n";
        $headers .= "Reply-To: contact.viewpal@gmail.com \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $message = '<html><body>';
        $message.='<div style="width:550px; background-color:#CC6600; padding:15px; font-weight:bold;">';
        $message.='Email Verification mail';
        $message.='</div>';
        $message.='<div style="font-family: Arial;">Confiramtion mail have been sent to your email id<br/>';
        $message.='click on the below link in your verification mail id to verify your account ';
        $message.="<a href='http://viewpal.com/webmaster/confirmation?id=$wm_id&email=$wm_email&confirmation_code=$wm_code'>click</a>";
        $message.='</div>';
        $message.='</body></html>';

        mail($wm_email,$subject,$message,$headers);
    }
}

