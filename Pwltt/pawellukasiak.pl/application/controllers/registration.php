<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller 
{
        function __construct(){
          parent::__construct();
          $this -> load -> model('user_model');
        }
        function index(){
            $this ->registration(); 
        }
        private function registration(){
            $this -> form_validation -> set_rules('login'  , 'User Name'  , 'trim|required|min_length[4]|xss_clean|callback_username_check'  );
            $this -> form_validation -> set_rules('email'  , 'Your Email'  , 'trim|required|valid_email|callback_email_check'  );
            $this -> form_validation -> set_rules('password'  , 'Password'  , 'trim|required|min_length[4]|max_length[32]'  );
            $this -> form_validation -> set_rules('con_password'  , 'Password Confirmation'  , 'trim|required|matches[password]'  );

            if($this -> form_validation -> run() == FALSE){  
               $data[ 'title' ] = "Użytkownik o tym Loginie lub adresie Email juz isnieje" ;
               $this -> userStatusLoad($data);
            }
            else{
               $this -> user_model  ->  add_user();
               $data[  'register_status' ] = '1';
               $data[  'title'  ] = "Udało Ci się zarejetrować!";
               $this -> userStatusLoad($data);
            }
        }
        private function userStatusLoad($data){
               $this -> load -> view(  'head.php'  );
               $this -> load -> view(  'navBar'  );
               $this -> load -> view(  'panel/userStatus'  ,  $data );
               $this -> load -> view(  'page.php' );
        }
        public function username_check($login){
            return $this -> user_model -> searchUser($login);
        }
        public function email_check($email){
           return $this -> user_model -> searchEmail($email); 
        }
        
}