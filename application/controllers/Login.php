<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index(){
		$this->load->view('home');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function class_schedule()
	{
		$this->load->view('class_schedule');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function login() //test
	{
		$this->load->view('login');
	}
	public function registration()
	{
		$this->load->view('registration');
	}
	public function admin()
	{
		$this->load->view('admin');
	}
	
	public function home()
	{
		$this->load->view('welcome');
	}
	public function loginform()
	{
		$this->load->view('login_submit');
	}
}
