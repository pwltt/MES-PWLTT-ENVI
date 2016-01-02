<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class user_model extends CI_Model
{
    private $newdata;
    function __construct() {
        parent::__construct();
        $this -> load -> database();
    }
    public function add_user(){
        $data=array(
            'username' => $this -> input -> post('login1'),
            'email' => $this -> input -> post('email'),
            'password'=>  md5($this -> input -> post('password1')),
            'register_date' => $this -> date_upload(),
            'last_login' => $this -> date_upload()
        );
        $query = $this -> db -> where("username",$data['username']) -> get('user');
        $query2 = $this -> db -> where("email",$data['email']) -> get('user');
        
        if($query -> num_rows == 0 && $query2 -> num_rows ==0){
        $this -> db -> insert('user',$data);
        }
    }
    public function searchUsername($username){
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
    public function searchLoginPassword($username,$password){
        $this -> db -> where('username',$username);
        $this -> db -> where('password',$password);
        $query = $this -> db -> get('user');

        if ($query->num_rows() == 1) {
            
            $data = array(
                'last_login' => $this -> date_upload()
            );
            $this -> db -> where('username',$username);
            $this -> db -> where('password',$password);
            $this -> db -> update('user',$data); 
            
            foreach($query->result() as $rows){
                $this -> newdata = array(
                   'user_id'  => $rows -> id,
                   'user_name'  => $rows -> username,
                   'user_email'    => $rows -> email,
                   'date_register'  => $rows -> register_date, 
                   'logged_in'  => TRUE,
                   'last_login' => $rows -> last_login
                );
            }
            $this -> session -> set_userdata($this -> newdata);
            $this -> session -> set_flashdata('msg','<div class="alert alert-success text-center"> Udało Ci się zalogować!</div>');
            return TRUE;
        }
        else{
            $this -> session -> set_flashdata('msg','<div class="alert alert-danger text-center"> Błędny Login lub hasło </div>');
            return FALSE;
        }
    }
    public function date_upload(){
        $datestring = "%Y-%m-%d %h:%i:%s";
        $time = time();
        return mdate($datestring, $time);
    }
    public function BestOfDayFormat(){
        $value = $this -> session -> userdata('last_login');
        
        $time = strtotime($value);
        $d = new DateTime($value);

        $weekDays = array('Poniedziałek', 'Wtorek', 'Sroda', 'Czwartek', 'Piątek', 'Sobota', 'Niedziela');
        $months = array('Stycznia', 'Lutego', 'Marca', 'Kwietnia','Maja', 'Czerwca', 'Lipca', 'Sierpnia', 'Września', 'Października', 'Listopada', 'Grudnia');

        if ($time >= strtotime('today') AND $time < strtotime('now')){
                return 'Dziś o ' .$d->format('G:i');
        }elseif ($time >= strtotime('yesterday') AND $time < strtotime('today')){
                return 'Wczoraj o ' . $d->format('G:i');
        }else{
                return $d->format('j') . ' ' . $months[$d->format('n') - 1] . ' o ' . $d->format('G:i');
        }
    }
}

