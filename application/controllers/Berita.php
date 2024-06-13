<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_berita');
    }

	public function index()
	{
		$data = array(
					'title' => 'SMAN 1 TAKISUNG',
					'title2' => 'Data Berita',
                    'berita' => $this->m_berita->lists(),
					'isi' 	=> 'admin/berita/v_list'
				);
		$this->load->view('admin/layout/v_wrapper',$data,FALSE);
	}

    public function tambah()
{
    $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
    $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required', array('required' => 'Berita Tidak Boleh Kosong!'));

    // Konfigurasi upload file
    $config['upload_path']   = './gambar_berita/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size']      = 2000; // Ukuran file
    $this->upload->initialize($config);

    // Validasi form
    if ($this->form_validation->run() == TRUE) {
        // Validasi ukuran file sebelum upload
        if ($_FILES['gambar_berita']['size'] > $config['max_size'] * 1024) {
            $data = array(
                'title'  => 'SMAN 1 TAKISUNG',
                'title2' => 'Tambah Data Berita',
                'error'  => 'Ukuran file melebihi batas maksimum (2 MB)',
                'isi'    => 'admin/berita/v_tambah'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
        } else {
            // Upload file
            if (!$this->upload->do_upload('gambar_berita')) {
                $data = array(
                    'title'  => 'SMAN 1 TAKISUNG',
                    'title2' => 'Tambah Data Berita',
                    'error'  => $this->upload->display_errors(),
                    'isi'    => 'admin/berita/v_tambah'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                // File berhasil diupload
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image']  = './gambar_berita/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                // Data untuk dimasukkan ke database
                $data = array(
                    'judul_berita'  => $this->input->post('judul_berita'),
                    'slug_berita'   => url_title($this->input->post('judul_berita'), 'dash', TRUE),
                    'isi_berita'    => $this->input->post('isi_berita'),
                    'tgl_berita'    => date('Y-m-d'),
                    'id_admin'      => $this->session->userdata('id_admin'),
                    'gambar_berita' => $upload_data['uploads']['file_name']
                );
                // Masukkan data ke database
                $this->m_berita->tambah($data);
                $this->session->set_flashdata('pesan', 'Berita Berhasil Di Tambahkan!');
                redirect('berita');
            }
        }
    } else {
        // Jika form tidak valid
        $data = array(
            'title'  => 'SMAN 1 TAKISUNG',
            'title2' => 'Tambah Berita',
            'isi'    => 'admin/berita/v_tambah'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
}

    public function edit($id_berita)
{
    $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
    $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required', array('required' => 'Berita Tidak Boleh Kosong!'));

    if ($this->form_validation->run() == TRUE) {
        $config['upload_path']   = './gambar_berita/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']      = 2000; // Ukuran foto
        $this->upload->initialize($config);

        // Cek apakah ada file foto yang diunggah
        if (!empty($_FILES['gambar_berita']['name'])) {
            // Validasi ukuran file sebelum upload
            if ($_FILES['gambar_berita']['size'] > $config['max_size'] * 1024) {
                $data = array(
                    'title'  => 'SMAN 1 TAKISUNG',
                    'title2' => 'Edit Data Berita',
                    'error_upload' => 'Ukuran file melebihi batas maksimum (2 MB)',
                    'berita' => $this->m_berita->detail($id_berita),
                    'isi'    => 'admin/berita/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                return; // Keluar dari method jika upload gagal
            }

            if (!$this->upload->do_upload('gambar_berita')) {
                $data = array(
                    'title'  => 'SMAN 1 TAKISUNG',
                    'title2' => 'Edit Data Berita',
                    'error_upload' => $this->upload->display_errors(),
                    'berita' => $this->m_berita->detail($id_berita),
                    'isi'    => 'admin/berita/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                return; // Keluar dari method jika upload gagal
            }

            // Menghapus file gambar lama
            $berita = $this->m_berita->detail($id_berita);
            if ($berita->gambar_berita != "") {
                unlink('./gambar_berita/' . $berita->gambar_berita);
            }

            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './gambar_berita/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $gambar_berita = $upload_data['uploads']['file_name'];
        } else {
            // Jika tidak ada file foto yang diunggah, gunakan foto lama
            $gambar_berita = $this->input->post('gambar_lama');
        }

        $data = array(
            'id_berita'     => $id_berita,
            'judul_berita'  => $this->input->post('judul_berita'),
            'slug_berita'   => url_title($this->input->post('judul_berita'), 'dash', TRUE),
            'isi_berita'    => $this->input->post('isi_berita'),
            'id_admin'      => $this->session->userdata('id_admin'),
            'gambar_berita' => $gambar_berita
        );
        $this->m_berita->edit($data);
        $this->session->set_flashdata('pesan', 'Berita Berhasil Di Reposting!');
        redirect('berita');
    } else {
        $data = array(
            'title'  => 'SMAN 1 TAKISUNG',
            'title2' => 'Edit Data Berita',
            'berita' => $this->m_berita->detail($id_berita),
            'isi'    => 'admin/berita/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
}



    public function delete($id_berita)
    {
            //menghapuss file foto lamaa
            $berita=$this->m_berita->detail($id_berita);
                if ($berita->gambar_berita !=""){
                    unlink('./gambar_berita/'.$berita->gambar_berita);
                }
            //end menghapus fotoo

            $data = array('id_berita' => $id_berita);
            $this->m_berita->delete($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus');
            redirect('berita');

    }

}
