<?php 
  class Template { 
  protected $_ci; 
  function __construct(){ 
  $this->_ci =&get_instance(); 
  } 
 
  function display($template,$data=null) { 
  $data['_content']=$this->_ci->load->view( 
  $template,$data, true); 
  
  $data['_header']=$this->_ci->load->view( 
  'template/header',$data, true);
  
  $data['_nav']=$this->_ci->load->view( 
  'template/nav',$data, true);
  
  $data['_reg']=$this->_ci->load->view( 
  'template/regmodal',$data, true);
  
  $data['_top_menu']=$this->_ci->load->view( 
  'template/menu',$data, true); 
  
  $data['_right_menu']=$this->_ci->load->view( 
  'template/sidebar',$data, true); 
  
  $this->_ci->load->view('/template.php',$data); 
  } 
  }