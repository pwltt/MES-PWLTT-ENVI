<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller
{   
    function __construct() {
        parent::__construct();
        $this  ->  load  ->  model('user_model'); 
    }
    public function index(){
        if($this ->page_exists())
            $this -> login();
        else 
            die("Page template doesn't exists!"); 
    }
    private function login(){
        $this -> form_validation -> set_rules(  'login'  , 'Username'  , 'trim|required|min_length[4]|xss_clean'  );
        $this -> form_validation -> set_rules(  'password'  , 'Password'  , 'trim|required|min_length[4]|max_length[32]|xss_clean|callback_password_check'  );
            
        if($this->form_validation->run() == FALSE){
            redirect('page');
        } else
            redirect('page');
    }
    public function password_check($password){
        $username = $this -> input -> post('login');
        return $result = $this -> user_model -> searchLogin($username,md5($password));
    }
    public function logout(){    
        $newdata = array(
        'user_id'   =>'',
        'user_name'  =>'',
        'user_email'  => '',
        'logged_in' => FALSE,
        );
        $this -> session -> unset_userdata($newdata);
        $this -> session -> sess_destroy();
        redirect('page');
    }
}