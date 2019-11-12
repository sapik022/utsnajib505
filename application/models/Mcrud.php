<?php

class Mcrud extends CI_Model {

	public function retrieve()
	{
		$this->db->select('idmhs,nim,nama,jenis_kelamin,alamat,telp');
		$this->db->from("tampil");
		$q = $this->db->get();
		if ($q->num_rows()>0) {
			$hasil = $q->result_array();
		}else{
			$hasil = array();
		}
		$q->free_result();

		return $hasil;
	}

	public function retrieve2()
	{
		$this->db->select('id_log,nim,no_lama,no_baru,waktu_perubahan');
		$this->db->from("loh_update");
		$q = $this->db->get();
		if ($q->num_rows()>0) {
			$hasil = $q->result_array();
		}else{
			$hasil = array();
		}
		$q->free_result();

		return $hasil;
	}

	public function simpan_data($data)
	{
		$q = $this->db->insert('mahasiswa', $data);
		if ($q) {
			redirect('crud/tampil');
		}else{
			redirect('crud/tambah');
		}
	}

	public function getRow($id)
	{
		$q = $this->db->where('idmhs', $id)->get('mahasiswa');
		return $q;
	}

	public function update_data()
	{
		$id = $this->input->post('idmhs');
		$data = array(
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
 			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
 			'alamat' => $this->input->post('alamat'),
 			'telp' => $this->input->post('telp')
 			
 		);	
		
		$q = $this->db->where('idmhs', $id)->update('mahasiswa', $data);
		if ($q) {
			redirect('crud/tampil');
		}else{
			redirect('crud/ubah');
			echo "hal tersimpan";
		}
	}


	public function hapus_data()
	{
		$id = $this->uri->segment(3);
		$q = $this->db->where('idmhs', $id)->delete('mahasiswa');
		if ($q) {
			redirect('crud/tampil');
		}
	}	
}