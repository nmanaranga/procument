<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Register extends CI_Controller {
    function __Construct()
    {
       parent::__Construct ();
      $this->load->database();
	   $this->load->model('Register_model');
     $this->load->helper('url_helper');
     $this->load->helper('form');
     $this->load->library('form_validation');
    }
    
    public function Index()
      {   
        $this->load->view('register');
      }
	public function create()
      {   
	  if($this->input->post('submit')!==null){
	  $vl=$this->Register_model->create();
	  if($vl=='ok'){
		  redirect(base_url().'login');
	  }else{
		  $data['error']=$vl;
		  $this->load->view('register',$data);
	  }
	  
      }else{
		  redirect(base_url().'register');
	  }
	  }
    }
?>