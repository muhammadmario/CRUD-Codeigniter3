<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MahasiswaModel');
        $this->load->library('form_validation');

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

    public function tambah()
    { 
        $data['judul'] = 'Tambah Data Mahasiswa';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('templates/footer');
         }else{
            $this->MahasiswaModel->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mahasiswa');
        }

    }
    
    public function hapus($id)
    {
        $this->MahasiswaModel->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa');
    }
}