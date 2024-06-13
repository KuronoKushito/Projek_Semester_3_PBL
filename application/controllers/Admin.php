<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_setting');
        $this->load->model('m_total'); // Load the new model
        $this->load->model('m_login');
    }

    public function index()
    {
        $data = array(
            'title' => 'SMAN 1 TAKISUNG',
            'title2' => 'Dashboard',
            'total_guru' => $this->m_total->get_total_guru(),
            'total_pengumuman' => $this->m_total->get_total_pengumuman(),
            'total_berita' => $this->m_total->get_total_berita(),
            'total_galeri' => $this->m_total->get_total_galeri(),
            'total_mapel' => $this->m_total->get_total_mapel(),
            'isi'  => 'admin/v_home'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

	public function setting()
	{

		$this->form_validation->set_rules('nip','NIP','required');
        $this->form_validation->set_rules('nama_sekolah','Nama Sekolah','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('no_telepon','No Telepon','required');
        $this->form_validation->set_rules('kepala_sekolah','Kepala Sekolah','required');
        $this->form_validation->set_rules('visi','Visi','required');
		$this->form_validation->set_rules('misi','Misi','required');
		$this->form_validation->set_rules('sejarah','Sejarah','required');


        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']          = './foto_kepsek/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 10000;
            $this->upload->initialize($config);
                if (!$this->upload->do_upload('foto_kepsek'))
            {
                    
				$data = array(
					'title' => 'SMAN 1 TAKISUNG',
					'title2' => 'Setting Web Sekolah',
					'setting' => $this->m_setting->detail(),
					'isi' 	=> 'admin/v_setting'
				);
				$this->load->view('admin/layout/v_wrapper',$data,FALSE);
                                   
            }
            else
            {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './foto_kepsek/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                //menghapuss file foto lamaa
                $setting= $this->m_setting->detail();
                if ($setting->foto_kepsek !=""){
                    unlink('./foto_kepsek/'.$setting->foto_kepsek);
                }
                //end menghapus fotoo

                $data = array(
                        'id_setting'       => '1',
                        'nip' 			=> $this->input->post('nip'),
                        'kepala_sekolah'     => $this->input->post('kepala_sekolah'),
                        'nama_sekolah'  => $this->input->post('nama_sekolah'),
                        'alamat'     => $this->input->post('alamat'),
                        'no_telepon'      => $this->input->post('no_telepon'),
                        'visi'    => $this->input->post('visi'),
						'misi'    => $this->input->post('misi'),
						'sejarah'    => $this->input->post('sejarah'),
                        'foto_kepsek'     => $upload_data['uploads']['file_name']
                );
                $this->m_setting->save_setting($data);
                $this->session->set_flashdata('pesan', 'Settingan web telah Dirubah!');
                redirect('admin/setting');
            }
                    

			$data = array(
				'id_setting'       => '1',
				'nip' 			=> $this->input->post('nip'),
				'kepala_sekolah'     => $this->input->post('kepala_sekolah'),
				'nama_sekolah'  => $this->input->post('nama_sekolah'),
				'alamat'     => $this->input->post('alamat'),
				'no_telepon'      => $this->input->post('no_telepon'),
				'visi'    => $this->input->post('visi'),
				'misi'    => $this->input->post('misi'),
				'sejarah'    => $this->input->post('sejarah'),
		);
				$this->m_setting->save_setting($data);
				$this->session->set_flashdata('pesan', 'Settingan web telah Dirubah!');
				redirect('admin/setting');

        } 

        $data = array(
			'title' => 'SMAN 1 TAKISUNG',
			'title2' => 'Setting Web Sekolah',
			'setting' => $this->m_setting->detail(),
			'isi' 	=> 'admin/v_setting'
		);
		$this->load->view('admin/layout/v_wrapper',$data,FALSE);
	}

    public function user()
    {
        // Memeriksa apakah pengguna sudah login
        $this->check_login();

        $data = array(
            'title' => 'SMAN 1 TAKISUNG',
            'title2' => 'User',
            'isi' => 'admin/v_user'
        );

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    // Fungsi untuk mengubah informasi pengguna
    public function edit_user()
    {
        // Memeriksa apakah pengguna sudah login
        $this->check_login();
    
        $this->form_validation->set_rules('nama_admin', 'Nama Admin', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username');
    
        // Tambahkan aturan validasi untuk password
        $this->form_validation->set_rules('password', 'Password', 'min_length[8]');
    
        if ($this->form_validation->run() == TRUE) {
            $id_admin = $this->session->userdata('id_admin');
            $nama_admin = $this->input->post('nama_admin');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
    
            // Panggil model untuk memeriksa apakah username sudah ada
            $this->load->model('M_login');
            $is_username_exists = $this->M_login->is_username_exists($username, $id_admin);
    
            if (!$is_username_exists) {
                // Panggil model untuk melakukan update
                $result = $this->M_login->update_user($id_admin, $nama_admin, $username, $password);
    
                if ($result) {
                    $this->session->set_userdata('nama_admin', $nama_admin);
                    $this->session->set_userdata('username', $username);
    
                    $this->session->set_flashdata('pesan', 'Data pengguna berhasil diubah');
                } else {
                    $this->session->set_flashdata('pesan', 'Gagal mengubah data pengguna');
                }
            } else {
                // Username sudah ada, set flashdata untuk notifikasi
                $this->session->set_flashdata('pesan', 'Username sudah digunakan, pilih username lain');
            }
    
            redirect('admin/user');
        }
    
        // Jika validasi gagal, kembali ke halaman user
        $this->user();
    }

    private function check_login()
    {
        if (!$this->session->userdata('id_admin')) {
            redirect('admin');
        }
    }

    // Fungsi callback untuk memeriksa apakah username sudah ada
public function check_username($username)
{
    $id_admin = $this->session->userdata('id_admin');
    $this->load->model('M_login');
    if ($this->M_login->is_username_exists($username, $id_admin)) {
        $this->form_validation->set_message('check_username', 'Username sudah digunakan, pilih username lain');
        return FALSE;
    } else {
        return TRUE;
    }
}

}
