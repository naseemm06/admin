<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
    public function semuaData()
    {
        return $this->db->get('user')->result_array();
    }
    public function proses_tambah_data()
    {
        $data = [
            "nama" =>$this->input->post('nama'),
            "alamat" =>$this->input->post('alamat'),
            "ttl" =>$this->input->post('ttl'),   
        ];

        $this->db->insert('user',$data);
    }
    public function hapus_data($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('user');

    }

    public function ambil_id_barang($id)
    {
       return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function proses_edit_data($id)
    {
        $data = [
            "nama" =>$this->input->post('nama'),
            "alamat" =>$this->input->post('alamat'),
            "ttl" =>$this->input->post('ttl'),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user' , $data);

    }
}