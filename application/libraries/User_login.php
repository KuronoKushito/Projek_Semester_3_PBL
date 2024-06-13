<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_login {
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('m_login');
        $this->ci->load->library('session');  // Tambahkan load library session
    }

    public function cek_login()
    {
        if ($this->ci->session->userdata('username')=="") {
            $this->ci->session->set_flashdata('pesan', 'Anda Belum Login!');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->ci->session->unset_userdata('id_admin');
        $this->ci->session->unset_userdata('username');
        $this->ci->session->unset_userdata('nama_admin');
        //$this->ci->session->set_flashdata('pesan', 'Logout Sukses!');
        redirect('login');
    }
}