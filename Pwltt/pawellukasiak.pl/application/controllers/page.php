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
            $this -> load -> view('head');
            $this -> load -> view('navBar');
            $this -> load -> view('page');
        }
        private function page_exists(){
            return file_exists(APPPATH . "views/page.php");
        }
}