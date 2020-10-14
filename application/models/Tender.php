<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tender extends CI_Model {
	
	function __construct(){
		parent::__construct();		
	}

	public function tender_details(){
		$a['all_data']=$this->LoadData();

		return $a;
	}

	public function LoadData(){
		$sql = "SELECT tender_id,reference_no,DATEDIFF(CURRENT_DATE(),expire_date_time) AS expire FROM tender";

		$query = $this->db->query($sql)->result();

		return $query;
	}
}
?>