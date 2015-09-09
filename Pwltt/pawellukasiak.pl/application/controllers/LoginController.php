<?php
class LoginController extends CI_Controller 
{
    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('login', 'Login', 'required|callback_checkUser');
	$this->form_validation->set_rules('pass', 'Password', 'required|callback_checkUser');
        
        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('index');
        }
        else
        {
                $this->load->view('login');
        }
    }
    
    public function checkUser()
    {
        $login = $this->input->post('login');
        $pass = $this->input->post('pass');
        
        $this->load->model('LoginModel');
        
        if ($this->LoginModel->login($login,$pass))
        {
            return TRUE; 
        }
        else
        {
            $this->form_validation->set_message('checkUser', 'Bledne dane logowania');
            return FALSE;   
        }
    }
   
    
    
}
