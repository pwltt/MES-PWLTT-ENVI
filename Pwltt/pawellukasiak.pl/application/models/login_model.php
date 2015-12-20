<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        
        $this -> load -> database();
    }
    
    public function login($username,$password,$email)
    {
        $this->db->where("username",$username);
        $this->db->where("password",$password);
        $this->db->where("email",$email);
        $query = $this->db->get('user');

        if($query -> num_rows > 0){
            $users = array();
            foreach ($query->result_array() as $row => $value)
            {
                 $users[$row] = $value;
            }
            return $users;
        } else {
            return false;            
        }
       
    }
}