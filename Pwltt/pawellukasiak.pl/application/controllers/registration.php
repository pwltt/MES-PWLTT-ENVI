<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller 
{
    private $data;
    function __construct(){
      parent::__construct();
      $this -> load -> model('user_model');
      $this -> load -> model('email_model');
    }
    function index(){
        $this -> registration(); 
    }
    private function registration(){
        $this -> form_validation -> set_error_delimiters('<div class="alert alert-danger text-center">', '</div>');
        $this -> form_validation -> set_rules('login1'  , 'Login'  , 'trim|required|min_length[4]|xss_clean|callback_username_check'  );
        $this -> form_validation -> set_rules('email'  , 'Email'  , 'trim|required|valid_email|callback_email_check'  );
        $this -> form_validation -> set_rules('password1'  , 'Hasło'  , 'trim|required|min_length[4]|max_length[100]'  );
        $this -> form_validation -> set_rules('con_password'  , 'Potwierdzenie hasła'  , 'trim|required|matches[password1]'  );

        if($this -> form_validation -> run() == FALSE){ 
            $this -> page();
        }
        else{
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Udało Ci się zarejestrować ! </br> W celu weryfikacji adresu email została wysłana wiadomość z linkiem weryfikacyjnym </div>');
            $this -> user_model -> add_user();
            $this -> email_model -> send_email($this -> input -> post('email'));
            
            redirect('page');
        }
    }
    function verifyEmail($hash){
        
        if($this->email_model->verify_Email($hash) == FALSE){
            $this -> session -> set_flashdata('msg','<div class="alert alert-warning text-center"> Adres <strong> '.$hash.' </strong> Już wcześniej był potwierdzony </div>');
            redirect('page');
        }else {
            
            $this->session->set_userdata('email_approved', 1);
            $this -> session -> set_flashdata('msg','<div class="alert alert-success text-center"> Adres <strong> '.$hash.' </strong> został potwierdzony </div>');
            redirect('page');
        }
        
    }
    public function username_check($login1){
        return $this -> user_model -> searchUsername($login1);
    }
    public function email_check($email){
        return $this -> user_model -> searchEmail($email); 
    }
    protected function page(){
        //$this -> data['LastLogin'] = $this -> user_model -> BestOfDayFormat();
        $this -> load -> view('head');
        $this -> load -> view('navBar');
        $this -> load -> view('page');
        $this -> load -> view('panel/rightPanel',  $this -> data);
    }
}