<?php

class Signup_model extends CI_Model {
	
	public function add_user($username, $password, $email)
	{
		
		$data = array(
			'username' => $username,
			'password' => $password,
			'email' => $email
		);
		
		
		if ($this->db->insert('utenti', $data))
			return true;
		else
			return false;
	}
	
}