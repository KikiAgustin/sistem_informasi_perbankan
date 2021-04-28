<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Kolom ini wajib diisi',
            'valid_email' => 'Email tidak valid'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Kolom ini wajib diisi'
        ]);

        if ($this->form_validation->run() == false) {

            $this->load->view('auth/index');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {

        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                // Cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email']
                    ];
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('message', '<h3>Selamat Datang dihalaman Pengajuan</h3>');
                    redirect('Home/index');
                } else {
                    $this->session->set_flashdata('auth_user', '<h3 style="color: red; text-align: center; margin-top: 20px;" >Password Salah</h3>');
                    redirect('Auth');
                }
            } else {
                $this->session->set_flashdata('auth_user', '<h3 style="color: red; text-align: center; margin-top: 20px;" >Email belum aktif</h3>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('auth_user', '<h3 style="color: red; text-align: center; margin-top: 20px;" >Email tidak terdaftar</h3>');
            redirect('Auth');
        }
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim', [
            'required' => 'Kolom nama lengkap harus diisi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[user.email]', [
            'required' => 'Kolom email harus diisi',
            'is_unique' => 'Email ini sudah terdaftar'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|matches[password1]', [
            'required' => 'Kolom ini harus diisi',
            'min_length' => 'Password minimal 8 karakter',
            'matches' => 'Isi password harus sama'
        ]);
        $this->form_validation->set_rules('password1', 'Konfirmasi Password', 'required|trim|min_length[8]|matches[password]', [
            'required' => 'Kolom ini harus diisi',
            'min_length' => 'Password minimal 8 karakter',
            'matches' => 'Isi password harus sama'
        ]);

        if ($this->form_validation->run() == false) {

            $this->load->view('auth/registrasi');
        } else {
            $nama_lengkap = htmlspecialchars($_POST['nama_lengkap'], true);
            $email = htmlspecialchars($_POST['email'], true);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $data = [
                'name' => $nama_lengkap,
                'email' => $email,
                'image' => "default.png",
                'password' => $password,
                'date_created' => time(),
                'is_active' => 0,
                'role_id' => 2
            ];

            $this->db->insert('user', $data);

            $this->session->set_flashdata('message', '<h3 style="text-align: center; margin-top: 20px;">Selamat Registrasi Anda Berhasil</h3>');
            redirect('Auth');
        }
    }
}
