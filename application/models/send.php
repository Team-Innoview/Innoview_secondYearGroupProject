<?php

class send extends CI_Model{

public function send(){
$data1 = array(
'notification_id'=> $this->input->post('notification_id'),
'date'=> $this->input->post('date'),
'message'=> $this->input->post('message')

);

// echo $data1['hall_no'];
$this->db->insert('notification',$data1);

}
}
?>
