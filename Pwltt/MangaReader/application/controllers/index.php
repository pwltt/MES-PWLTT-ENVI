<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class index extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
         public $data;
        function __construct() {
            parent::__construct();
            $this->load->model('Oblicz');
        }
        

        public function index(){
            
           
            $this->data['obrazki'] = get_filenames('images/');
            
            
		$this->load->view('index',  $this->data);
	}
        public function click(){
            
             $this->load->view('index',  $this->data);
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                if (isset($_POST['0'])) {
                    $this->data['wyswietl'] = $this->data->obrazki['0'];
                    $this->load->view('index',  $this->data);
                } else {
                    //assume btnSubmit
                }
            }
        }
                
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */