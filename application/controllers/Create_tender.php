<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Create_tender extends CI_Controller {
	function __Construct()
	{
	   parent::__Construct ();
	   $this->load->database();
	   $this->load->model('Create_tender_model');
     $this->load->helper('url_helper');
     $this->load->helper('form');
     $this->load->library('form_validation');
     $this->load->library('upload');
	}
	
	public function Index()
      {   
        $this->load->view('create_tender'); 
      }

    public function store(){
      
      $insert = $this->Create_tender_model->create();
           if($insert=='ok'){
            $data = array('success' => true, 'msg'=> "<script>swal('Good job!', 'Your work has been saved!.', 'success');</script>");
          }
          else{
            if($insert=='error_file'){
              $data = array('success' => false, 'msg'=> "<script>swal({
              title: 'Oops! There is an error in your file. Please check your file.',
              icon: 'error',
              dangerMode: true,
              });</script>");
            }
            elseif ($insert=='pk') {
              $data = array('success' => false, 'msg'=> "<script>swal({
              title: 'Oops! Tender document already exists.',
              icon: 'error',
              dangerMode: true,
              });</script>");
            }
          }
          echo json_encode($data);

    }

	}
?>