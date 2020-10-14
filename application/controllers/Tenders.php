<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tenders extends CI_Controller {
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
		$this->load->model('Tender'); 
		$this->load->view('tenders', $this->Tender->tender_details()); 

	}

	public function sign_in(){
		//$is_login=$this->sd['logged_in'];
		$is_login=1;
		
		echo $is_login;
	}


}
?>