<?php
    class LoginModel extends CI_Model
    {
        
        public function login($login,$pass)
        {
            $this->db->select('id, login, pass');
            $this->db->from('pawellukasiak');
            $this->db->where('login',$login);
            $this->db->where('pass',MD5($pass));
            $this -> db -> limit(1);
            
            $query = $this->db->get();
            
            if($query->num_rows() == 1)
            {
                return $query->result();
            }
            else 
            {
                return false;
            }
        }   
    }
?>