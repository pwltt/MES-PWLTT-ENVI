<?php

class RegisterController extends CI_Controller
{
    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('loginRegister', 'Login', 'required|callback_AddUser');
	$this->form_validation->set_rules('passRegister', 'Password', 'required|callback_AddUser');
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
        $login = $this->input->post('loginRegister');
        $pass = $this->input->post('passRegister');
        $email = $this->input->post('email');
        $phNumber = $this->input->post('phNumber');
        
        
        $this->load->model('RegisterModel');
        $data = $this->RegisterModel->Register($login,$pass,$email,$phNumber);
        if ($data == FALSE)
        {
            $this->form_validation->set_message('AddUser', 'Login juz jest zajety');
            return FALSE;  
        }
        else
        {
            $this->db->insert('pawellukasiak',$login,$pass,$email,$phNumber);
            return TRUE; 
        }
        
        
    }
    
    
    
}
