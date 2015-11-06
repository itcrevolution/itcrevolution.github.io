<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Itc_m extends CI_Model {
		private $t_user = 'user';
		
		private $add_soal = 'soal';
		
		function __construct() {
			parent ::__construct();
			//$this->load->library(array('database'));
			
		}
		
		
		function register($data){
        $this->db->insert($this->t_user, $data);
    	}
 		/*
 		function lastviset(){
			         // Update database
         $user_id = $this->session->userdata('id_user');

        $updated = $this->db->set('last_log', now())
              ->where('id', $user_id)
              ->update('user');
              return true;
 		}
 		*/
 		function ujian($soal){
			$this->db->insert($this->add_soal, $soal);
		}
	    
	    function login($username, $password, $status){
	        $data = $this->db
	        		->where(array('username' => $username, 'password' => md5($password),'status' => $status))
	                ->get($this->t_user);
	 		
				
	        //dicek 
	        
	        if ($data->num_rows() > 0){
	            $user = $data->row();
					
				
	            //data hasil seleksi dimasukkan ke dalam $session
	            $session = array(
	                
	                'logged_in' => 1,
	                'id_user' => $user->id_user,
	                'username' => $user->username,
	                'nama' => $user->nama,
	                'nim' => $user->nim,
	                'hp' => $user->hp,
	                'bbm' => $user->bbm,
	                'reg_date' => $user->reg_date,
	                'level' => $user->level
	            );
	 
	            //data dari $session akhirnya dimasukkan ke dalam session (menggunakan library CI)
	            $this->session->set_userdata($session);
	            return true;
	            
	        }
	        else{
	            $this->session->set_flashdata('notification', 'Username dan Password tidak cocok/ belum di konfirmasi Admin');
	            return false;
	        }
	    }
	
	function member($nama, $nim, $tmp_lhr, $tgl_tgl, $tmp_skg, $slamat, $hp, $bbm, $email){
	        $list = $this->db->where(array('nama' => $nama, 'nim' => $nim, 'tmp_lhr' =>  $tmp_lhr, 'tgl_lhr' =>  $tgl_tgl, 'tmp_skg' =>  $tmp_skg, 'alamat' =>  $alamat, 'hp' =>  $hp, 'bbm' =>  $bbm, 'email' =>  $email))
	        		
	                ->get($this->t_user);
	                return $list;
	                }
	 
 function result_all(){


	 	$this->db->select('*');
	 	$this->db->from('user');
	 	$this->db->join('progdi', 'user.id_prog = progdi.id_prog', 'left');
	$query = $this->db->get();
	 	return $query->result();
	 }
	 function cekmember(/*$where = ''*/){
	// $list = array('nama'=>'testttt nama');
	 //$list = $this->db->query("select * from user");
	 //$data = mysql_fetch_array($list);
	 $this->db->select('*');
	 $this->db->from('user');
	 //$this->db->join('progdi','user.id_prog=progdi.id_prog');         	        
	 $this->db->join('progdi', 'user.id_prog=progdi.id_prog', 'left');         	        
	 //return $this->db->query("select * from user $where");,
	// $query = $this->db->get();
	 return $this->db->get();
	 }
	 
    function logout(){
        $this->session->sess_destroy();
    }
	}
	

	