<?php

class update extends CI_Model{

// Function To Fetch All Receptionist Record
function show_students(){
$query = $this->db->get('receptionist');
$query_result = $query->result();
return $query_result;
}

// Function To Fetch Selected Receptionist Record
function user_id($data){
$this->db->select('*');
$this->db->from('receptionist');
$this->db->where('user_id', $data);
$query = $this->db->get();
$result = $query->result();
return $result;
}
// Update Query For Selected Student
function update_student_id1($id,$data){
$this->db->where('user_id', $id);
$this->db->update('receptionist', $data);
}
}
?>