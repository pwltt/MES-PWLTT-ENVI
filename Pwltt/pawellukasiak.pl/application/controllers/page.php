<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {
        
        private $data;
        
        function __construct()
        {
          parent::__construct();
          $this->load->model('login_model');
        }
        
        function index($page = "") {
        $this -> data = array(
            'page' => $page,
            'template' => "default"
        );
        
        $this -> data['template_url'] = "templates/" . $this -> data['template'] . "/";
        $this -> data['assets_url'] = base_url() . "assets/templates/" . $this -> data['template'];
        $this -> data['media_url'] = base_url() . "assets";
        
        if(!empty($page)){
            if($this -> template_exists()){
                $this -> get_data();
                
                $content = $this -> data['content'];
                $content = str_replace('src="', 'src="' . $this -> data['media_url'] . '/', $content);
                $this -> data['content'] = $content;
                
                $this -> load -> view($this -> data['template_url'] . "page", $this -> data);
            } else {
                die("Page template doesn't exists!");                
            }
        } else {
            echo 404;
        }
        
        }

        private function get_data(){
            $this -> data = array_merge($this -> data, $this -> login_model -> get_data($this -> data['page']));
        }

        private function template_exists(){
            return file_exists(APPPATH . "views/" . $this -> data['template_url'] . "page.php");
        }
}