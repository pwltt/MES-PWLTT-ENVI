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
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center"> Użytkownik o tym loginie lub adresie email juz istnieje </div>');
                redirect('page');
            }
            else{
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Udało Ci się zarejestrować !</div>');
                $this -> user_model  ->  add_user();
                redirect('page');
            }
        }
        
        public function username_check($login){
            return $this -> user_model -> searchUser($login);
        }
        public function email_check($email){
           return $this -> user_model -> searchEmail($email); 
        }
        
}