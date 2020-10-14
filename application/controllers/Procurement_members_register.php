<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Procurement_members_register extends CI_Controller {
  function __Construct()
  {
   parent::__Construct ();
   $this->load->database();
   $this->load->model('Procurement_members_register_model');
   $this->load->helper('url_helper');
   $this->load->helper('form');
   $this->load->library('form_validation');
 }

 public function Index()
 {   
  $this->load->view('procurement_members_register');
}
public function create()
{   
  if($this->input->post('submit')!==null){
    $vl=$this->Procurement_members_register_model->create();
    if($vl=='ok'){
     echo"<script>alert('Save Completed');history.go(-1);</script>";     
   }else{
    $data['error']=$vl;
    $this->load->view('procurement_members_register',$data);
  }

}else{
  redirect(base_url().'procurement_members_register');
}
}
}
?>