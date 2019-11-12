<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Login extends CI_Controller
 {
 	public function __construct()
 	{
 		parent::__construct();
		 $this->load->model('Model_login');
		 
 	}
 	public function index()
 	{
		$cek = $this->session->userdata('idadmin');
		if (!empty($cek)){
			redirect('dashboard','refresh');
		} else {
 		$this->load->view('login');
		}
 		
 	}
 	public function auth()
 	{
 		$user = $this->input->post('username');
 		$pass = $this->input->post('password');
 		$this->Model_login->getLogin($user, $pass);
 		
 	}
 	public function logout()
 	{
 		session_destroy();
 		redirect('login','refresh');
 		
 		
 	}
 }