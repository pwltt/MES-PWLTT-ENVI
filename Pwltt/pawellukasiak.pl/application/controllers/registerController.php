<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class RegisterController extends CI_Controller
{
    private $data;
        
    function __construct()
    {
      parent::__construct();
      $this->load->model('register_model');
    }
    public function registration()
    {
        $this->load->library('form_validation');
        // field name, error message, validation rules
        $this->form_validation->set_rules('login', 'User Name', 'trim|required|min_length[4]|xss_clean|callback_username_check');
        $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email|callback_email_check');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

        if($this->form_validation->run() == FALSE)
        {
           $this-> load -> view('head.php');
           $data['register_msg_status'] = FALSE;
           $data['register_msg'] = "Użytkownik o tym Loginie lub adresie Email juz isnieje </br></br></br> Mogłeś też źle wpisać login ";
           $this-> load -> view('panel/index.php',$data);
        }
        else
        {
           $this->register_model->add_user();
           $data['register_msg_status'] = TRUE;
           $data['register_msg'] = "Udało Ci się zarejetrować!";

           $this-> load -> view('head.php');
           $this-> load -> view('panel/index.php',$data);
        }
    }
    public function username_check($login)
    {
        return $this->register_model->searchUser($login);
    }
    public function email_check($email)
    {
       return $this->register_model->searchEmail($email); 
    }
}
