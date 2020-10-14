<?php defined('BASEPATH') OR exit('No direct script access allowed');

class View_tender extends CI_Model {
	
	function __construct(){
		parent::__construct();		
	}

	public function view_details(){
		$a['all_data']=$this->LoadData();

		return $a;
	}

	public function LoadData(){
		$tender_id=$_GET['ten_id'];
		$sql = "SELECT tender_id,reference_no,`effective_date_time`,`expire_date_time`,pre_bid_meeting_date_time,`non_refundable_fee`,`bid_security_amount`,`bid_security_expire_date`,`advertisement_file_name` 
		FROM tender
		WHERE tender_id=$tender_id";

		$query = $this->db->query($sql)->result();

		return $query;
	}

}
?>