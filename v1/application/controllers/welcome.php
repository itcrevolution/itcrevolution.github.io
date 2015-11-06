<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
       // $this->load->model('itc_m');
     //   $this->load->library(array('template','session'));
    }
	public function index()
	{
		$data = array('title' => 'ITC USM');
		
		$this->load->view('dash/head');
        $this->load->view('dash/nav');
        $this->load->view('dash/isi',$data);
        $this->load->view('dash/footer');
        $this->load->view('dash/end');
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */