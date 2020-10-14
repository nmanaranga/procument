<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Test extends CI_Controller {
	function __Construct()
	{
	   parent::__Construct ();
	   $this->load->database();
	   //$this->load->model('Create_tender_model');
     $this->load->helper('url_helper');
     $this->load->helper('form');
     $this->load->library('form_validation');
	}
	
	public function Index()
      {   
        $this->load->view('test'); 
      }
	}
?>