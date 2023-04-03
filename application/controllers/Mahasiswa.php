<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MahasiswaModel');
	}

    public function index($nama = '')
    {
        $data['judul'] = 'Mahasiswa';
        $data['nama'] = $nama;
        $data['mahasiswa'] = $this->MahasiswaModel->getAllMahasiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }
}