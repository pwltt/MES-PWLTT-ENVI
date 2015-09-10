<?php
    class LoginModel extends CI_Model
    {
        
        public function login($login,$pass)
        {
            $this->db->select('login','pass');
            $this->db->from('pawellukasiak');
            $this->db->where('login',$login);
            $this->db->where('pass',$pass);
            
            $query = $this->db->get();
            
            if($query->num_rows() == 1)
            {
                return true;
            }
            else 
            {
                return false;
            }
        }   
    }
?>