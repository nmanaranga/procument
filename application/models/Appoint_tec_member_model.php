<?php
class Appoint_tec_member_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function create(){
     $reference_no = "123";

     for($x=1; $x<=$_POST['mem_count']; $x++){

         $data[] = array(
            'reference_no' => $reference_no,
            'member_nic' => $_POST['membernic_'.$x],
            );
     }


     $insert = $this->db->insert_batch('appoint_tec_member', $data);
     if ($insert) {
        return 'ok';
    }else{
       return 'error_insert';
   }

}

}