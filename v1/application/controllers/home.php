<?php
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('itc_m');
        $this->load->library(array('template','session'));
    
    }
    //// Bagian Login Dan Register
     function register()
    {
        $form_data = $this->input->post();
        if (!empty($form_data))
        {
        	
            $form_data['password'] = md5($form_data['password']);
            $form_data['nama'] = ucwords($form_data['nama']);
            $form_data['nim'] = ucwords($form_data['nim']);
            $form_data['bbm'] = strtoupper($form_data['bbm']);
            $form_data['tmp_lhr'] = ucwords($form_data['tmp_lhr']);
            $form_data['tmp_skg'] = ucwords($form_data['tmp_skg']);
            $form_data['level'] = 'User';
            $form_data['alamat'] = ucwords($form_data['alamat']);
            $this->itc_m->register($form_data);
            //$this->session->set_flashdata('berhasil', 'Pendaftaran berhasil, Anda dapat masuk ke dalam sistem');
            redirect('home');
        }
   
    }
	
    function login()
    {
        $form_data = $this->input->post('data');
        if (!empty($form_data))
        {
           // $form_data['last_log'] = '';
            if ($this->itc_m->login($form_data['username'], $form_data['password'], 1))
          
            {
             //   $this->itc_m->lastviset();      
             // $this->lastviset();  
                redirect('home');
            }
            else
            {
                echo" <script>alert('Cek Usename dan Password / Belum Di Konfirmasi Oleh ADMIN!');
		            			history.go(-1);
		          	  </script>";
            }
        }
       
    }
    /*
    public function lastviset(){
    //    $last =  $this->input->post('data');

      //  $last['last_log'] = time();
       $this->itc_m->lastviset();
       return true;
    }*/
    
     function index()
    {
        if ($this->session->userdata('logged_in'))
        	
        {
            //Setelah Login... Dashboard Masing Masing Level
            //redirect('home/cek_level');
            if ($this->session->userdata('level')== 'Admin')
	    	{
				$this->load->view('admin');
			}
			elseif ($this->session->userdata('level')== 'Tutor')
			{
				$this->load->view('tutor');
			}
			else
			{
//                $this->itc_m->lastviset();
				redirect('home/user');
				/* Beta Tester
				$this->load->view('dashboard/header');
				$this->load->view('dashboard/nav');
				$this->load->view('user/member');
				*/
			}
	            
	    }
        else
        {
            //Home... / Login dan Register / Login Gagal Mbalik!!/ Ke HOME
            
            
            $this->load->view('fp/head');
            $this->load->view('fp/navbar');
            $this->load->view('fp/content');
            $this->load->view('pages/regmodal');
            $this->load->view('fp/footer');
            $this->load->view('fp/endfile');
        }
    }
 
    
     function logout()
    {
        $this->itc_m->logout();
        redirect('home');
    }
    
    function add_soal(){
    	$soal_data = $this->input->post('soal');

        if (!empty($soal_data)) {
            $this->itc_m->ujian($soal_data);
            redirect('home');
        }
         $this->load->view('soal');
    }	
    
    function getData(){


        $data['q'] = $this->itc_m->result_all();
        echo "<pre>";
        print_r($data['q']);
        echo "</pre>";
        die();
    }
    // Bagian Dashboard
    
    function user($page='user2')
    {
		 if ( ! file_exists(APPPATH.'/views/user/'.$page.'.php'))
				{
					// Whoops, we don't have a page for that!
					show_404();
				}
			else
				{
					
                    $data['title'] = ucfirst($page); // Capitalize the first letter

					$this->load->view('/dashboard/header', $data);
					//$this->load->view('/dashboard/nav', $data);
					//$this->load->view('/dashboard/profile', $data);
					$data = array('total' => $this->itc_m->cekmember()->result_array());
                    $this->load->view('/user/'.$page, $data);
					//$this->load->view('/dashboard/footer', $data);
					
	
					//$this->load->view('user/user',$data);			
            	
				}
	}
    
    function list_data()
    {
		$data = array('total' => $this->itc_m->cekmember()->result_array());
	
		$this->load->view('user',$data);
	}
   }
?>