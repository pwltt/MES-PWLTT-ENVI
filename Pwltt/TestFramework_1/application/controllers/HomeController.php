<?php
    class HomeController extends CI_Controller
    {
    	public function index()
		{
		//$this->load->database('config');
                // $this->db->insert('');
		$this->load->view('home');
		}
    }
?>