<?php
class Create_tender_model extends CI_Model {
  
    public function __construct(){
            $this->load->database();
        }
     
    public function create(){
        $this->load->helper('url');
        $pre_bid_date = date('Y-m-d',strtotime($this->input->post('pre_bid_met_date')));
        $bid_security_expire_date = date('Y-m-d',strtotime($this->input->post('bid_security_expire_date')));

        $tender_period = $this->input->post('tender_period');
        list($startDate, $endDate) = explode(' - ', $tender_period);

        $reference_no = "123";

        $config['upload_path'] = 'uploads/tender';
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = 1024 * 8;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
 
        if (!$this->upload->do_upload('file'))
        {
            $file_error = "false";
            $msg = $this->upload->display_errors('', '');
            $file_name = "";
        }
        else
        {
            $file_error = "true";
            $file_data = $this->upload->data();
            $file_name = $file_data['file_name'];
        }
        
        $data = array(
        'reference_no' => $reference_no,
        'effective_date_time' => $startDate,
        'expire_date_time' => $endDate,
        'pre_bid_meeting_date_time' => $pre_bid_date,
        'non_refundable_fee' => $this->input->post('non_refundable_fee'),
        'bid_security_amount' => $this->input->post('bid_security_amount'),
        'bid_security_expire_date' => $bid_security_expire_date,
        'advertisement_file_name' => $file_name
        );

        $this->db->where('reference_no=', $reference_no);
        $query = $this->db->get('tender');

        if($file_error == "true"){
            if($query->num_rows() > 0){
                return 'pk';
            }else {
                    $insert = $this->db->insert('tender', $data);
                    if ($insert) {
                        return 'ok';
                    }
                    else{
                       return 'error_insert';
                    }
                }
            }
            else{
                return 'error_file';
            }
      
    }
}