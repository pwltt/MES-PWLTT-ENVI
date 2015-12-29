<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class user_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        $this -> load -> database();
    }
    public function add_user(){
        $data=array(
          'username' => $this -> input -> post('login'),
          'email' => $this -> input -> post('email'),
          'password'=>  md5($this -> input -> post('password')),
          'register_date' => now()
        );
        $query = $this -> db -> where("username",$data['username']) -> get('user');
        $query2 = $this -> db -> where("email",$data['email']) -> get('user');
        
        if($query -> num_rows == 0 && $query2 -> num_rows ==0)
        {
        $this -> db -> insert('user',$data);
        }
    }
    public function searchLogin($username,$password){
        $this -> db -> where('username',$username);
        $this -> db -> where('password',$password);
        $this -> db -> limit(1);
        $query = $this -> db -> get('user');

        if ($query->num_rows() == 1) {
            foreach($query->result() as $rows)
            {
             $this -> newdata = array(
               'user_id'  => $rows -> id,
               'user_name'  => $rows -> username,
               'user_email'    => $rows -> email,
               'date_register'  => $rows -> register_date, 
               'logged_in'  => TRUE
             );
            }
            $this -> session -> set_userdata($this -> newdata);
            $this->session->set_flashdata('msg','<div class="alert alert-success text-center"> Udało Ci się zalogować <strong>'. $this -> newdata['user_name'] .'</strong>  </div>');
            return TRUE;
        }
        else{
            $this->session->set_flashdata('msg','<div class="alert alert-danger text-center"> Błędny Login lub hasło </div>');
            return FALSE;
        }
    }
    public function searchUser($username){
        $query = $this -> db -> where("username",$username) -> get('user');
        if($query -> num_rows == 0)
            return TRUE;
        else
            return FALSE;
    }
    public function searchEmail($email){
        $query = $this -> db -> where("email",$email) -> get('user');
        if($query -> num_rows == 0)
            return TRUE;
        else
            return FALSE;
    }
}

