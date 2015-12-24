<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller 
{
        function __construct(){
          parent::__construct();
        }
        function index(){
            if($this -> page_exists()){
                $this ->loadPage();
            } else 
                die("Page template doesn't exists!");    
        }
        private function loadPage(){
            $data['title'] = "Witam ";
            $this -> load -> view('head');
            $this -> load -> view('navBar');
            $this -> load -> view('page', $data);
        }
        private function page_exists(){
            return file_exists(APPPATH . "views/page.php");
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
            $this ->index();
        }
}