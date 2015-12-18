<?php

class Login_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        
        $this -> load -> database();
    }
    
    public function get_data($page){
        $res = $this -> db -> where('shortname', $page) -> limit(1) -> get('pages');
        if($res -> num_rows > 0){
            $pages = array();
            foreach($res -> row() as $key => $value){
                $pages[$key] = $value;
            }
            return $pages;
        } else {
            return false;            
        }
    }
}