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
    public function login(){
        $this -> form_validation -> set_rules(  'login'  , 'Username'  , 'trim|required|min_length[4]|xss_clean'  );
        $this -> form_validation -> set_rules(  'password'  , 'Password'  , 'trim|required|min_length[4]|max_length[32]|xss_clean|callback_password_check'  );
            
        if($this->form_validation->run() == FALSE){
            $this ->failedLogin();
        } else
            $this ->welcome();
    }
    public function welcome(){
        $data[ 'title' ] = "Witam ";
        $this -> load -> view(  'head.php'  );
        $this -> load -> view(  'navBar'  );
        $this -> load -> view(  'page', $data );
    }
    public function failedLogin(){
        $data[ 'title' ] = "Błędny Login lub hasło";
        $this -> load -> view(  'head.php'  );
        $this -> load -> view(  'navBar'  );
        $this -> load -> view(  'page', $data  );
    }
    public function password_check($password){
        $username = $this -> input -> post('login');
        return $result = $this -> user_model -> searchLogin($username,md5($password));
    }
    private function page_exists(){
            return file_exists(APPPATH . "views/page.php");
    }
}