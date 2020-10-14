<?php
class Procurement_members_register_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function create(){
		$curr_date = date('Y-m-d');
		$this->load->library('encrypt');
		$this->load->helper('date');


		
		$m_data = array(
			'name' => $this->input->post('m_name'),
			'nic' => $this->input->post('nic'),
			'designation' => $this->input->post('des'),
			'area_of_specialty' => $this->input->post('area_of_spec'),
			'address' => $this->input->post('address'),
			'phone' => $this->input->post('c_number'),
			'fax' =>$this->input->post('c_fax'),
			'e-mail' => $this->input->post('c_email'),
			
			);

		$data = array(
			'firstname' => $this->input->post('m_name'),
			'user_group_id' => '3',//member
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
			$c_insert =$this->db->insert('procurement_members', $m_data);
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