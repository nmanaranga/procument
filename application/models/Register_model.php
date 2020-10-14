<?php
class Register_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function create(){
		$curr_date = date('Y-m-d');
		$this->load->library('encrypt');
		$this->load->helper('date');


		
		$c_data = array(
			'contractor_name' => $this->input->post('c_name'),
			'address' => $this->input->post('address'),
			'contact_number' => $this->input->post('c_number'),
			'company_email' =>$this->input->post('c_email'),
			'business_registration_number' => $this->input->post('brno'),
			'vat_registration_no' => $this->input->post('vrno'),
			'tax_identification_no' => $this->input->post('tino'),
			);

		$data = array(
			'firstname' => $this->input->post('c_name'),
			'user_group_id' => '2',//contractor
			'username' => $this->input->post('username_s'),
			'password' =>$this->encrypt->encode($this->input->post('password_s')),
			'tel_number' => $this->input->post('c_number'),
			'email' => $this->input->post('c_email'),
			'ip' =>  $this->input->ip_address(),
			'status' => '1',
			'date_added' => $curr_date,
			);

		$this->db->where('username =', $this->input->post('username_s'));
		$query = $this->db->get('users');
		if($query->num_rows()>0){
			$d="Oops! Supplementary document already exists.";
			return $d;
		}else{
			$c_insert =$this->db->insert('contractor', $c_data);
			$insert =$this->db->insert('users', $data);
			if($insert && $c_insert){
				return "ok";
			}else{
				$d="Oops! Insertion Fail!";
				return $d;
			}
		}
	}

	
	
}