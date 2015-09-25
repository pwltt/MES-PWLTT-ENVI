<?php

class WyliczController extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('ObliczModel','',TRUE);
    }
    
    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('liczba1', 'Liczba1');
	$this->form_validation->set_rules('liczba2', 'Liczba2', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('error');
        }
        else
        {
                $this->load->view('index',$this->Wylicz());
        }
    }
    
    public function Wylicz()
    {
        $liczba1 = $this->input->post('liczba1');
        $liczba2 = $this->input->post('liczba2');
        
        $result = $this->ObliczModel->Dodaj($liczba1,$liczba2);
        
        if($result)
        {
            return $result;
        }
        else 
        {
            $this->form_validation->set_message('Wylicz', 'Bledne dane');
            return false;
        }
     
        }
}


