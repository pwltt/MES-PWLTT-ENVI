<?php
class manga extends CI_Controller
{
    public $data;
    function __construct() {
        parent::__construct();
        $this->load->model('Oblicz');
        }
        
    public function index() {
        $this->data['obrazki'] = get_filenames('images/');
            
            
		$this->load->view('index',  $this->data);
        
    }
    
    
    
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

