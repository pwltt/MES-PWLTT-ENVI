<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller
{   
    function __construct() {
        parent::__construct();
        $this  ->  load  ->  model('user_model'); 
    }
    public function index(){
        $this -> login();
    }
    private function login(){
        $this -> form_validation -> set_error_delimiters('<div class="alert alert-danger text-center">', '</div>');
        $this -> form_validation -> set_rules('login','Username','trim|required|min_length[4]|xss_clean');
        $this -> form_validation -> set_rules('password','Password','trim|required|min_length[4]|max_length[100]|callback_search_Login_Password');
            
        if($this->form_validation->run() == FALSE){
            $this -> session -> set_flashdata('msg','<div class="alert alert-danger text-center">Formulaż logowania został źle wypełniony, bądź taki login lub hasło nie istnieją</div>');
            redirect('page');
        } else {
            redirect('page');
        }
    }
    public function search_Login_Password($password){
        return $this -> user_model -> searchLoginPassword($this -> input -> post('login'),md5($password));
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
    public function page(){
        $this -> data['LastLogin'] = $this -> user_model -> BestOfDayFormat();
            
            $this -> load -> view('head');
            $this -> load -> view('navBar');
            $this -> load -> view('page');
            $this -> load -> view('panel/rightPanel',  $this -> data);
    }
}