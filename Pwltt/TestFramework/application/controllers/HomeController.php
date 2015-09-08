<?php
    class HomeController extends CI_Controller
    {
    	public function index()
		{
            
                $this->load->database('pawellukasiak');
		$this->load->view('index');
		}
    }
?>