<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Appoint_bid_member extends CI_Controller {
	function __Construct()
	{
    parent::__Construct ();
    $this->load->database();
    $this->load->model('Appoint_bid_member_model');
    $this->load->helper('url_helper');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('upload');
  }

  public function Index()
  {   
    $this->load->view('appoint_bid_member'); 
  }

  public function auto_com()
  {   
    $this->db->like('nic', $_POST['query']);
    $this->db->limit(5);
    $query = $this->db->select(array('nic','name','address','phone','fax','email'))->get('bid_opening_committee_member');

    foreach($query->result() as $r){
      $abc[] = $r->nic."|".$r->name."|".$r->address."|".$r->phone."|".$r->fax."|".$r->email;
    }
    echo json_encode($abc);
  }


  public function store(){

    $insert = $this->Appoint_bid_member_model->create();
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