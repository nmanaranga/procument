<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bid_opening_committee_register extends CI_Controller {
  function __Construct()
  {
   parent::__Construct ();
   $this->load->database();
   $this->load->model('Bid_opening_committee_register_model');
   $this->load->helper('url_helper');
   $this->load->helper('form');
   $this->load->library('form_validation');
 }

 public function Index()
 {   
  $this->load->view('bid_opening_committee_register');
}
public function create()
{   
  if($this->input->post('submit')!==null){
    $vl=$this->Bid_opening_committee_register_model->create();
    if($vl=='ok'){
     echo"<script>alert('Save Completed');history.go(-1);</script>";     
   }else{
    $data['error']=$vl;
    $this->load->view('bid_opening_committee_register',$data);
  }

}else{
  redirect(base_url().'bid_opening_committee_register');
}
}
}
?>