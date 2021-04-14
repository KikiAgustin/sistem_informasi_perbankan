<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data = [
            "judul" => "BANKKU | Home"
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('home/index');
        $this->load->view('template/footer');
    }


    public function simpanan()
    {
        $simpanan = $this->db->get('tbl_simpanan')->result_array();
        $data = [
            "judul"     => "BANKKU | Simpanan",
            "simpanan"  => $simpanan
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('home/simpanan');
        $this->load->view('template/footer');
    }


    public function pinjaman()
    {
        $data = [
            "judul" => "BANKKU | Pinjaman"
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('home/pinjaman');
        $this->load->view('template/footer');
    }
}
