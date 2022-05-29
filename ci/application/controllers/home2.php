<?php
defined('BASEPATH') OR exit('No direct script access allowed');

        class home2 extends CI_Controller {

            public function index() 
            {
                $data['title'] = 'Tambah Data Barang';
                $data['user'] = $this->M_user->semuaData();
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar');
                $this->load->view('templates/topbar');
                $this->load->view('home/user', $data);
                $this->load->view('templates/footbar');
            }

}