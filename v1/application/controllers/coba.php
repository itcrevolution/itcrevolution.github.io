<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Coba extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      
      $this->load->helper('url');
      }
  /*
   public function index()
   {
      // $header berisi array data yang akan dilemparkan ke view header.php
      $header = array(
         'title'     =>'Welcome to my Website'
      );
       
      // $content berisi array data yang akan dilemparkan ke view content.php
      $content = array(
         'article'   =>'Lorem Ipsum Dolor Sit Amet'
      );
       
      // kumpulkan data yang akan dilemparkan ke view index.php
      $data['data_to_load'] = array($header,$content);
       
      // load view index.php dengan beban data $data
      $this->load->view('index',$data);
   }
  */	

	public function nsjaindex()
	{
		
		$header = $this->load->view('home/header');
		$nav = $this->load->view('home/nav');
		$modal = $this->load->view('home/regmodal');
		// Content
		
		
		$content = $this->load->view('home/home');
		
		$footer = $this->load->view('home/footer');
		
		
		$home['data_load'] = array($header, $nav, $modal, $content, $footer);
		$this->load->view('index',$home);
		//$this->load->view('home');
		
	}
	
	function about()
	{
		
		$header = $this->load->view('home/header');
		$nav = $this->load->view('home/nav');
		
		// Content
		$content = $this->load->view('home/about');
		
		$footer = $this->load->view('home/footer');
		
		
		
		// Registrasi (Modal)
		$modal = $this->load->view('home/regmodal');
		
		$home['data_load'] = array($header, $nav, $content);
		$this->load->view('index',$home);
		//$this->load->view('home');
	}
	
	public function index($page = 'home')
{

	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}

	$data['title'] = ucfirst($page); // Capitalize the first letter

	$this->load->view('home/header', $data);
	$this->load->view('home/nav', $data);
	$this->load->view('home/regmodal', $data);
	$this->load->view('pages/'.$page, $data);
	$this->load->view('home/footer', $data);

}
	
	
	
}