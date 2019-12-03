<?php

class Crud extends CI_Controller {
	public function __construct()

	{
		parent::__construct();
		$this->load->model('mcrud');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	public function index()
	{
		redirect('crud/tampil');
	}

	public function tampil()
	{
		$data = array(
			'isi' => $this->mcrud->retrieve(),
		); 
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('tampil_data', $data);
		$this->load->view('template/footer');
	}	

	public function tampil2()
	{
		$data = array(
			'isi' => $this->mcrud->retrieve2(),
		);
		$this->load->view('template/header');
		$this->load->view('template/sidebar'); 
		$this->load->view('tampil_log', $data);
		$this->load->view('template/footer');
	}	

	public function tambah()
	{
		$data = array('judul' => 'Tambah Data');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('tambah_data', $data);
		$this->load->view('template/footer');
	}

	public function simpan()
	{
		// $this->load->library('form_validation');
		// $this->form_validation->set_rules('nama','required|alpha');
		// $this->form_validation->set_rules('telp','nomer','required|numeric');
		// if ($this->form_validation->run()==false) 
		// {
			$data = array('judul' => 'Tambah Data');
			$this->load->view('tambah_data', $data);
		// }else{
				echo "hal tersimpan";

			$data = array(
				'idmhs' => '',
				'nim' => $this->input->post('nim'),
				'nama' => $this->input->post('nama'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'alamat' => $this->input->post('alamat'),
				'telp' => $this->input->post('telp')
				
			);
			$this->mcrud->simpan_data($data);
		// }
}

	public function ubah()
	{ 

		$idmhs = $this->uri->segment(3);
	    $q = $this->mcrud->getRow($idmhs);
	    $data = array( 
	    	'judul' => 'Ubah Data',
	    	 'idmhs' 	=> $q->row('idmhs'),
	    	 'nim' => $q->row('nim'),
	    	 'nama' => $q->row('nama'),
	    	 'jenis_kelamin' => $q->row('jenis_kelamin'),
	    	 'alamat' => $q->row('alamat'),
	    	 'telp' => $q->row('telp')
	    	); 
	
	$this->load->view('template/header');
	$this->load->view('template/sidebar');
    $this->load->view('update_data', $data);  
    $this->load->view('template/footer');   
   } 

 	public function update()
 	{     
 		$this->mcrud->update_data();
 	} 

 	public function view()
	{
		$idmhs= $this->uri->segment(3);
		

	}
 
    public function hapus()
    {     
    	$this->mcrud->hapus_data();
   	} 
}
