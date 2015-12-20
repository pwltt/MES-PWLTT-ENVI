<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {
        
        private $data;
        
        function __construct()
        {
          parent::__construct();
          $this->load->model('login_model');
        }
        
        function index() {
        $this -> data = array(
            //'users' => $this ->getUsers_data()
        );
            if($this -> page_exists()){
                $this -> load -> view(  'head'  );
                $this -> load -> view(  'page' ,  $this -> data);
            } else {
                die("Page template doesn't exists!");                
            }
        
        
        }

//        private function getUsers_data(){
//            return $this -> login_model -> get_data();
//        }

        private function page_exists(){
            return file_exists(APPPATH . "views/page.php");
        }
}