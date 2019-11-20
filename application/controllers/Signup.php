<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {


// public function index()
// {
// $this->load->view('sturegistration.php');
// }

// public function signin()
// {
// $this->load->view('login.php');
// }
public function registration()
{
$this->load->model('studentregistration');
$item = new studentregistration;
$item->registeruser();
redirect(base_url().'index.php/Welcome/sturegistrations','refresh');
}
}