<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_pinjaman extends CI_Model
{

    public function produkPinjaman($id_pinjaman)
    {
        return $this->db->get_where('tbl_produk_pinjaman', ['id_pinjaman' => $id_pinjaman])->result_array();
    }

    public function detailPinjaman($id_produk)
    {
        return $this->db->get_where('tbl_produk_pinjaman', ['id_produk_pinjaman' => $id_produk])->row_array();
    }

    public function fiturPinjaman($id_produk)
    {
        return $this->db->get_where('tbl_fitur_kredit_pinjaman', ['id_produk_pinjaman' => $id_produk])->result_array();
    }
}
