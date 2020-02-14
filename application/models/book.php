<?php

class book extends CI_Model{

public function book(){
$data1 = array(
'hall_no'=> $this->input->post('hall_no'),
'day'=> $this->input->post('day'),
'emp_no'=> $this->input->post('emp_no')

);

// echo $data1['hall_no'];
$this->db->insert('booking_details',$data1);

}
}
?>
