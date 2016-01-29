<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class email_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this -> load -> database();
    }
    function send_email($email){
        
        $from_email = 'email_validator@pawellukasiak.pl';
        $subject = 'Weryfikacja adresu email';
        $message = 'Drogi użytkowniku<br/><br/>Kliknij link, aby zweryfikować adress email http://pawellukasiak.pl/registration/verifyEmail/' . $email .'<br/><br/>Dzięki!<br/>';
        
       
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'poczta.superhost.pl';
        $config['smtp_port'] = '587';
        $config['smtp_user'] = 'email_validator@pawellukasiak.pl';
        $config['smtp_pass'] = 'validemail';
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n";
        $this->email->initialize($config);
        
        $this->email->from($from_email, 'PawelLukasiak');
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
        
        //$this->email->print_debugger();
    }
    function verify_Email($key){
        $data = array('email_approved' => 1);
        $query = $this->db->where('email', $key)-> get('user');
        if($query -> num_rows == 1){
        $this->db->where('email', $key);    
        $this->db->update('user', $data);
        return TRUE;
        } else{ 
        return FALSE;
        }
    }
}