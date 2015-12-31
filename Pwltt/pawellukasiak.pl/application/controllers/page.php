<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller 
{
        private $data;
        function __construct(){
          parent::__construct();
          $this -> load -> model('user_model');
        }
        function index(){
            if($this -> page_exists()){
                $this ->loadPage();
            } else 
                die("Page template doesn't exists!");    
        } 
        private function loadPage(){

            $this -> data['LastLogin'] = $this -> user_model -> BestOfDayFormat();
            
            $this -> load -> view('head');
            $this -> load -> view('navBar');
            $this -> load -> view('page');
            $this -> load -> view('panel/rightPanel',  $this -> data);
        }
        private function page_exists(){
            return file_exists(APPPATH . "views/page.php");
        }
}