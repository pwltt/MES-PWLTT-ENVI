<?php
    class HomeController extends CI_Controller
    {
    	public function index()
		{
		$this->load->database();
		$this->load->view('home.php');
		}
    }
?>