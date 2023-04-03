<?php

class MahasiswaModel extends CI_Model{
    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $data =[
            'nama'=> $this->input->post('nama', true),
            'nim'=> $this->input->post('nim', true),
            'jurusan'=> $this->input->post('jurusan', true),
        ];

        $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataMahasiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }
}