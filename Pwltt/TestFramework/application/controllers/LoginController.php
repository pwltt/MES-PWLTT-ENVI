<?php
class LoginController extends CI_Controller 
{
    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('login', 'Login', 'callback_login_check');
	$this->form_validation->set_rules('pass', 'Password', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('index');
        }
        else
        {
                $this->load->view('login');
        }
    }
    
    public function login_check($str)
	{
		if ($str == 'test')
		{
			$this->form_validation->set_message('login_check', 'The %s field can not be the word "test"');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

    
    
}
