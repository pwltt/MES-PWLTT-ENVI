<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class LoginController extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['login'] = $session_data['login'];
      $this->load->view('login', $data);
    }
    else
    {
      //If no session, redirect to login page
       $this->load->view('index');
    }
  }
  
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    $this->load->view('index');
  }


}

?>