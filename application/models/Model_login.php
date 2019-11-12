<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Model_login extends CI_Model{

 	public function getLogin($user, $pass)
 	{
 		$usr = $user;
 		$pas = md5($pass);
 		$cek_login = $this->db->get_where('admin', array('username' =>$usr ,'password' =>$pas ));

 		if($cek_login->num_rows() > 0){
 			$ambil = $cek_login->row();
 			if ($usr == $ambil->username && $pas == $ambil->password) {
 				$sess = array(
 					'idadmin' => $ambil->idadmin,
 					'nama' => $ambil->nama,
 					'username' => $ambil->username,
 				);
 				$this->session->set_userdata($sess);
 				redirect('dashboard','refresh');
 			}
 		} else {
 			$this->session->set_flashdata('gagal','username atau kamu yang goblok!');
 			redirect('login','refresh');
 		}
 	}
 	
 	
 }