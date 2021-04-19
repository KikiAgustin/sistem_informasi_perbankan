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

    // Controler untuk Simpanan
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

    public function tabunganBisnis()
    {
        $data = [
            "judul"             => "BANKKU | Tabungan Bisnis  "

        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('simpanan/tabungan_bisnis');
        $this->load->view('template/footer');
    }

    public function depositoRupiah()
    {
        $data = [
            "judul"             => "BANKKU | Deposito Rupiah  "

        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('simpanan/deposito_rupiah');
        $this->load->view('template/footer');
    }


    // Controller Untuk Pinjaman
    public function pinjaman()
    {
        $pinjaman = $this->db->get('tbl_pinjaman')->result_array();
        $data = [
            "judul"         => "BANKKU | Pinjaman",
            "pinjaman"      => $pinjaman
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('home/pinjaman');
        $this->load->view('template/footer');
    }


    public function pinjamaUMKM($id_pinjaman)
    {
        $produkPinjaman = $this->Model_pinjaman->produkPinjaman($id_pinjaman);
        if ($id_pinjaman == 1) {
            $judul = "UMKM";
        } else {
            $judul = "Corporate";
        }
        $data = [
            "judul"             => "BANKKU | Pinjaman Untuk " . $judul . "  ",
            "produkPinjaman"    => $produkPinjaman

        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('home/pinjaman_produk');
        $this->load->view('template/footer');
    }

    public function modalKerja()
    {
        $data = [
            "judul"             => "BANKKU | Pinjaman Modal Kerja  "

        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('home/modal_kerja');
        $this->load->view('template/footer');
    }

    public function usahaRakyat()
    {
        $data = [
            "judul"             => "BANKKU | Pinjaman Usaha Rakyat  "

        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('home/usaha_rakyat');
        $this->load->view('template/footer');
    }

    public function modalKerjaCorporate()
    {
        $data = [
            "judul"             => "BANKKU | Kredit Modal Kerja  "

        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('corporate/modal_kerja');
        $this->load->view('template/footer');
    }

    public function kreditInvestasi()
    {
        $data = [
            "judul"             => "BANKKU | Kredit Investasi  "

        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('corporate/kredit_investasi');
        $this->load->view('template/footer');
    }





    public function detailPinjaman($id_produk)
    {
        $detailPinjaman = $this->Model_pinjaman->detailPinjaman($id_produk);
        $fiturPinjaman   = $this->Model_pinjaman->fiturPinjaman($id_produk);
        $data = [
            "judul"             => "BANKKU | Detail Pinjaman ",
            "detailPinjaman"    => $detailPinjaman,
            "fiturPinjaman"     => $fiturPinjaman

        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('home/detail_pinjaman');
        $this->load->view('template/footer');
    }
}
