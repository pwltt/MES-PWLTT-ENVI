<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Register_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this -> load -> database();
    }
    public function add_user()
    {
        $data=array(
          'username'=>$this->input->post('login'),
          'email'=>$this->input->post('email'),
          'password'=>md5($this->input->post('password'))
        );
        $query = $this->db->where("username",$data['username']) -> get('user');
        $query2 = $this->db->where("email",$data['email']) -> get('user');

        if($query -> num_rows == 0 && $query2 -> num_rows ==0)
        {
        $this->db->insert('user',$data);
        }
    }
    
    public function searchUser($username)
    {
        $query = $this->db->where("username",$username) -> get('user');

        if($query -> num_rows == 0)
            return TRUE;
        else
            return FALSE;
    }
    public function searchEmail($email)
    {
        $query = $this->db->where("email",$email) -> get('user');

        if($query -> num_rows == 0)
            return TRUE;
        else
            return FALSE;
    }
    

}

