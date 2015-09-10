<?php

class RegisterController extends CI_Controller
{
    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('login', 'Login', 'required|callback_AddUser');
	$this->form_validation->set_rules('pass', 'Password', 'required|callback_AddUser');
        $this->form_validation->set_rules('email', 'Email', 'required|callback_AddUser');
        $this->form_validation->set_rules('phNumber', 'PhNumber', 'required|callback_AddUser');
        
        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('index');
        }
        else
        {
                $this->load->view('register');
        }
        
    }
    public function AddUser()
    {
        $login = $this->input->post('login');
        $pass = $this->input->post('pass');
        $email = $this->input->post('email');
        $phNumber = $this->input->post('phNumber');
        
        
        $this->load->model('RegisterModel');
        
        if ($this->RegisterModel->Register($login,$pass,$email,$phNumber) != NULL)
        {
            $this->db->insert('pawellukasiak',$this->RegisterModel->Register($login,$pass,$email,$phNumber));
            return TRUE; 
        }
        else
        {
          
            $this->form_validation->set_message('AddUser', 'Lgin juz jest zajety');
            return FALSE;   
        }
        
        
    }
    
    
    
}
