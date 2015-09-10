<?php
class RegisterModel extends CI_Model
{
    public function Register($login,$pass,$email,$phNumber)
    {
        $data = array(
            'login' => $login,
            'pass'  => $pass,
            'email' => $email,
         'phNumber' => $phNumber
         );
        $this->db->select('login','pass');
            $this->db->from('pawellukasiak');
            $this->db->where('login',$login);
        
        
        $query = $this->db->get();
            
        foreach ($query->result() as $row)
        {
            if($row->login == $data['login'])
            {
                return false;
            }
            else 
            {
                //$this->db->insert('pawellukasiak',$data);
                return $data;
            }
        }  
    }
}
?>