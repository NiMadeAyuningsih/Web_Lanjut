<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		$data['nama_lengkap'] = "romi choirudin";
		$data['jenis_kelamin'] = "laki laki";
		$data['nim'] = 1810330027;
		$mahasiswa[0] = array(
			'nim' => 12345,
			'nama'=> "budi"
		 );
		$data['mahasiswa'] = $mahasiswa;
		$this->load->view('mahasiswa_index', $data);
	}

	public function tambah()
	{
		$this->load->view('mahasiswa_tambah');
	}

}

/* End of file mahasiswa.php */
/* Location: ./application/controllers/mahasiswa.php */