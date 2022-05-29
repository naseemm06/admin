<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function index() 
    {
        $data['title'] = 'Halaman Data Barang';
        $data['barang'] = $this->B_barang->semuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index', $data);
        $this->load->view('templates/footbar');
    }
        public function databarang() 
    {
        $data['title'] = 'Halaman Data Barang';
        $data['barang'] = $this->B_barang->semuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/databarang', $data);
        $this->load->view('templates/footbar');
    }

    public function user()
    {
        $data['title'] = 'Tambah Data Barang';
        $data['user'] = $this->M_user->semuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/user', $data);
        $this->load->view('templates/footbar');
    }
    public function proses_tambah_data()
    {
    $config['upload_path']          = './gambar/';
                    $config['allowed_types']        = 'gif|jpg|png';
                    $config['max_size']             = 10000;
                    $config['max_width']            = 10000;
                    $config['max_height']           = 10000;

                    $this->load->library('upload', $config);

                    if ( ! $this->upload->do_upload('userfile'))
                    {
                        echo "Gagal Tambah";
                    }
                    else
                    {
                        $gambar = $this->upload->data();
                        $gambar = $gambar['file_name'];
                        $nama = $this->input->post('nama', TRUE);
                        $stok = $this->input->post('stok', TRUE);
                        $harga = $this->input->post('harga', TRUE);

                        $data = array(
                            'nama' => $nama,
                            'stok' => $stok,
                            'harga' => $harga,
                            'gambar' => $gambar,
                        );
                        $this->db->insert('barang', $data);
                        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                                                Data Berhasil di Tambah!</div>');
                        redirect('home3');
                        

                    }
    }

    public function hapus_data($id)
    {
        $this->B_barang->hapus_data($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                                            Data Berhasil di hapus!</div>');
        redirect('home3');
    }
    public function edit_data($id)
    {
        $data['title'] = 'Halaman edit Barang';
        $data['barang'] = $this->B_barang->ambil_id_barang($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/edit_data', $data);
        $this->load->view('templates/footbar');
    }

    public function proses_edit_data()
    {
    $id= $this->input->post('id');
    $config['upload_path']          = './gambar/';
                    $config['allowed_types']        = 'gif|jpg|png';
                    $config['max_size']             = 10000;
                    $config['max_width']            = 10000;
                    $config['max_height']           = 10000;

                    $this->load->library('upload', $config);

                    if ( ! $this->upload->do_upload('userfile'))
                    {
                        
                        $nama = $this->input->post('nama', TRUE);
                        $stok = $this->input->post('stok', TRUE);
                        $harga = $this->input->post('harga', TRUE);

                        $data = array(
                            'nama' => $nama,
                            'stok' => $stok,
                            'harga' => $harga,
                        );
                        $this->db->where('id', $id );
                        $this->db->update('barang', $data);
                        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                                                Data Berhasil di ubah!</div>');
                        redirect('home3');
                    }
                    else
                    {
                        $gambar = $this->upload->data();
                        $gambar = $gambar['file_name'];
                        $nama = $this->input->post('nama', TRUE);
                        $stok = $this->input->post('stok', TRUE);
                        $harga = $this->input->post('harga', TRUE);

                        $data = array(
                            'nama' => $nama,
                            'stok' => $stok,
                            'harga' => $harga,
                            'gambar' => $gambar,
                        );
                        $this->db->where('id', $id );
                        $this->db->update('barang', $data);
                        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                                                Data Berhasil di ubah!</div>');
                        redirect('home3');
                    }
                        

        }
     public function proses_tambah_data_user()
    {
    $config['upload_path']          = './gambar/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 10000;
                $config['max_height']           = 10000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                    echo "Gagal Tambah";
                }
                else
                {
                    $gambar = $this->upload->data();
                    $gambar = $gambar['file_name'];
                    $nama = $this->input->post('nama', TRUE);
                    $alamat = $this->input->post('alamat', TRUE);
                    $ttl = $this->input->post('ttl', TRUE);

                    $data = array(
                        'nama' => $nama,
                        'alamat' => $alamat,
                        'ttl' => $ttl,
                        'gambar' => $gambar,
                    );
                    $this->db->insert('user', $data);
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                                            Data Berhasil di Tambah!</div>');
                    redirect('home2');
                    

                }
    }
    public function proses_edit_data_user()
    {
    $id= $this->input->post('id');
    $config['upload_path']          = './gambar/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 10000;
                $config['max_height']           = 10000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                    
                    $nama = $this->input->post('nama', TRUE);
                    $alamat = $this->input->post('alamat', TRUE);
                    $ttl = $this->input->post('ttl', TRUE);

                    $data = array(
                        'nama' => $nama,
                        'alamat' => $alamat,
                        'ttl' => $ttl,
                    );
                    $this->db->where('id', $id );
                    $this->db->update('user', $data);
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                                            Data Berhasil di ubah!</div>');
                    redirect('home2');
                }
                else
                {
                    $gambar = $this->upload->data();
                    $gambar = $gambar['file_name'];
                    $nama = $this->input->post('nama', TRUE);
                    $alamat = $this->input->post('alamat', TRUE);
                    $ttl = $this->input->post('ttl', TRUE);

                    $data = array(
                        'nama' => $nama,
                        'alamat' => $alamat,
                        'ttl' => $ttl,
                        'gambar' => $gambar,
                    );
                    $this->db->where('id', $id );
                    $this->db->update('user', $data);
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
                                            Data Berhasil di ubah!</div>');
                    redirect('home2');
                }
                    

    }

}