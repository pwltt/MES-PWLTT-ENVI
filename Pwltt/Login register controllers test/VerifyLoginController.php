<?php
class VerifyLoginController extends CI_Controller 
{
    function __construct()
    {
      parent::__construct();
      $this->load->model('LoginModel','',TRUE);
    }
    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('login', 'Login', 'callback_checkUser');
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
        
        $result = $this->LoginModel->login($login,$pass);
        
        if($result)
        {
            $sess_array = array();
            foreach($result as $row)
            {
              $sess_array = array(
                'id' => $row->id,
                'login' => $row->login
              );
              $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE; 
        }
        else
        {
            $this->form_validation->set_message('checkUser', 'Bledne dane logowania');
            return FALSE;   
        }
    }
   
    
    
}
