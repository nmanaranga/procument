<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller {
	function __Construct()
	{
		parent::__Construct ();
		$this->load->database();
		$this->load->model('Login_model');
		$this->load->helper('url_helper');
		$this->load->helper('form');
		$this->load->library('form_validation');
		
	}
	
	public function Index()
	{   
		$this->load->view('login');
	}
	public function user_login()
	{   
		
		$u_date=$this->Login_model->user_login();
	  //print_r( $u_date);
		
		if($u_date==true){
			$first=$this->Login_model->is_first();
			if($first){
				$data = array('success' => false, 'typ'=>true, 'msg'=> "<script>window.location.replace('".base_url()."setup');</script>");
				echo json_encode($data);
			}else{
				$data = array('success' => false, 'typ'=>true, 'msg'=> "<script>window.location.replace('".base_url()."home');</script>");
				echo json_encode($data);
			}
	  //redirect(base_url().'login');
		}else {
			
			$data = array('success' => false, 'typ'=>true, 'msg'=> "<script>swal({
				title: 'Oops! Login Details Invalid.',
				
				icon: 'error',
				
				dangerMode: true,
			});</script>");
			echo json_encode($data);
		}
	}
	
}
?>