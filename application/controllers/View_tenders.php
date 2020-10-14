<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class view_tenders extends CI_Controller {
	function __Construct()
	{
		parent::__Construct ();
		$this->load->database();
		$this->sd = $this->session->all_userdata();
		$this->load->helper('url_helper');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	
	public function Index()
	{   
		$this->load->model('View_tender'); 
		$this->load->view('view_tenders', $this->View_tender->view_details()); 

	}
	
}
?>