<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_barang extends CI_Model {
    public function semuaData()
    {
        return $this->db->get('barang')->result_array();
    }
    public function proses_tambah_data()
    {
        $data = [
            "nama" =>$this->input->post('nama'),
            "stok" =>$this->input->post('stok'),
            "harga" =>$this->input->post('harga'),   
        ];

        $this->db->insert('barang',$data);
    }
    public function hapus_data($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('barang');

    }

    public function ambil_id_barang($id)
    {
       return $this->db->get_where('barang', ['id' => $id])->row_array();
    }

    public function proses_edit_data($id)
    {
        $data = [
            "nama" =>$this->input->post('nama'),
            "stok" =>$this->input->post('stok'),
            "harga" =>$this->input->post('harga'),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('barang' , $data);

    }
    
}