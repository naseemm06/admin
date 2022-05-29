<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home3 extends CI_Controller {

    public function index() 
    {
        $data['title'] = 'Halaman Data Barang';
        $data['barang'] = $this->B_barang->semuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/databarang', $data);
        $this->load->view('templates/footbar');
    }


}