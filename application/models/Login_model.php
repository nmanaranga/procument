<?php
class Login_model extends CI_Model {
  
    public function __construct(){
            $this->load->database();
			 $this->load->library('session');
        }
    function is_first(){
	
		$this->db->select("id");
        $this->db->from('settings');
		$this->db->where('code','first_time_config');
		$this->db->where('value','0');
        $query= $this->db->get();
		if($query->num_rows()>0){
			return true;
		}else{
			return false;
		}
	}		
	  
	function user_login(){
		$this->load->library('encrypt');
		$this->load->helper('date');
		$curr_date = date('Y-m-d');
		
		$username_s=$this->input->post('username_s');
		$password_s=$this->input->post('password_s');
        $this->db->select("user_id,user_group_id,username,firstname,lastname,password");
           $this->db->from('users');
           $query= $this->db->get();
		   foreach($query->result() as $vl){
			   $store_password=$this->encrypt->decode($vl->password);
			   
			   if($store_password==$password_s){
				   
				   $user_deta = array(
        'username'  => $vl->username,
        'user_group_id'     => $vl->user_group_id,
        'user_id'     => $vl->user_id,
        'firstname'     => $vl->firstname,
        'logged_in' => 'TRUE');
return true;
$this->session->set_userdata($user_deta);
				   
			   }
		   }
		    
      }
	  

}