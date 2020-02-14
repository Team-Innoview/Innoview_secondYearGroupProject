<?php

class Contactus extends CI_Model{

public function contus(){
$data = array(
'name'=> $this->input->post('name'),			
'email'=> $this->input->post('email'),
'subject'=> $this->input->post('subject'),
'message'=> $this->input->post('message'),
);
return $this->db->insert('contact_us2',$data);
}

}?>
