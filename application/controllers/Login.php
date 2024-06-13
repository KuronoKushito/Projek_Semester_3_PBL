<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

          
            $this->load->model('M_login');
            $cek = $this->M_login->login($username, $password);

            if ($cek) {
                $id_admin = $cek->id_admin;
                $username = $cek->username;
                $nama_admin = $cek->nama_admin;

                // Session
                $this->load->library('session');
                $this->session->set_userdata('id_admin', $id_admin);
                $this->session->set_userdata('username', $username);
                $this->session->set_userdata('nama_admin', $nama_admin);

                redirect('admin');
            } else {
                $this->session->set_flashdata('pesan', 'Username atau password Anda Salah!!');
                redirect('login');
            }
        }

        $data = array(
            'title' => 'Login'
        );
        $this->load->view('v_login1', $data, FALSE);
    }

    public function logout()
    {
        $this->user_login->logout();
    } 
}
