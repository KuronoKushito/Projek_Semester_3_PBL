<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_galeri');
    }

	public function index()
	{
		$data = array(
					'title' => 'SMAN 1 TAKISUNG',
					'title2' => 'Galeri Foto',
                    'galeri' => $this->m_galeri->lists(),
					'isi' 	=> 'admin/galeri/v_list'
				);
		$this->load->view('admin/layout/v_wrapper',$data,FALSE);
	}

    public function tambah()
    {
        $this->form_validation->set_rules('nama_galeri', 'Nama Galeri', 'required');
    
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']   = './sampul/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = 2000; // Ukuran foto
    
            // Set pesan error kustom jika ukuran file melebihi batas
            $config['upload_path'] = './sampul/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000; // Ukuran foto
    
            $this->upload->initialize($config);
    
            // Validasi ukuran file sebelum upload
            if ($_FILES['sampul']['size'] > $config['max_size'] * 1024) {
                $data = array(
                    'title'  => 'SMAN 1 TAKISUNG',
                    'title2' => 'Tambah Galeri',
                    'error'  => 'Ukuran file melebihi batas maksimum (2 MB)',
                    'isi'    => 'admin/galeri/v_tambah'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                if (!$this->upload->do_upload('sampul')) {
                    $data = array(
                        'title' => 'SMAN 1 TAKISUNG',
                        'title2' => 'Tambah Galeri',
                        'error' => $this->upload->display_errors(),
                        'isi' => 'admin/galeri/v_tambah'
                    );
                    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                } else {
                    $upload_data = array('uploads' => $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './sampul/' . $upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);
    
                    $data = array(
                        'nama_galeri' => $this->input->post('nama_galeri'),
                        'id_admin' => $this->session->userdata('id_admin'),
                        'sampul' => $upload_data['uploads']['file_name'],
                    );
                    $this->m_galeri->tambah($data);
                    $this->session->set_flashdata('pesan', 'Galeri Berhasil Di Tambahkan!');
                    redirect('galeri');
                }
            }
    
        }
    
        $data = array(
            'title' => 'SMAN 1 TAKISUNG',
            'title2' => 'Tambah Galeri',
            'isi' => 'admin/galeri/v_tambah'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
    

    public function edit($id_galeri)
    {
        $this->form_validation->set_rules('nama_galeri', 'Nama Galeri', 'required');
    
        if ($this->form_validation->run() == TRUE) {
            // Cek apakah ada file foto yang diunggah
            if (!empty($_FILES['sampul']['name'])) {
                $config['upload_path']   = './sampul/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = 2000; // Ukuran foto
                $this->upload->initialize($config);
    
                // Validasi ukuran file sebelum upload
                if ($_FILES['sampul']['size'] > $config['max_size'] * 1024) {
                    $data = array(
                        'title'  => 'SMAN 1 TAKISUNG',
                        'title2' => 'Edit Galeri',
                        'error'  => 'Ukuran file melebihi batas maksimum (2 MB)',
                        'galeri' => $this->m_galeri->detail($id_galeri),
                        'isi'    => 'admin/galeri/v_edit'
                    );
                    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                    return; // Keluar dari method jika ukuran file melebihi batas
                }
    
                if (!$this->upload->do_upload('sampul')) {
                    $data = array(
                        'title'  => 'SMAN 1 TAKISUNG',
                        'title2' => 'Edit Galeri',
                        'error'  => $this->upload->display_errors(),
                        'galeri' => $this->m_galeri->detail($id_galeri),
                        'isi'    => 'admin/galeri/v_edit'
                    );
                    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                    return; // Keluar dari method jika upload gagal
                }
    
                // Menghapus file foto lama
                $galeri = $this->m_galeri->detail($id_galeri);
                if ($galeri->sampul != "") {
                    unlink('./sampul/' . $galeri->sampul);
                }
    
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './sampul/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
    
                $sampul = $upload_data['uploads']['file_name'];
            } else {
                // Jika tidak ada file foto yang diunggah, gunakan foto lama
                $sampul = $this->input->post('foto_lama');
            }
    
            $data = array(
                'id_galeri'   => $id_galeri,
                'nama_galeri' => $this->input->post('nama_galeri'),
                'id_admin'    => $this->session->userdata('id_admin'),
                'sampul'      => $sampul
            );
            $this->m_galeri->edit($data);
            $this->session->set_flashdata('pesan', 'Galeri Berhasil Di Edit!');
            redirect('galeri');
        } else {
            $data = array(
                'title'  => 'SMAN 1 TAKISUNG',
                'title2' => 'Edit Galeri',
                'galeri' => $this->m_galeri->detail($id_galeri),
                'isi'    => 'admin/galeri/v_edit'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
        }
    }
    

    

    public function delete($id_galeri)
        {
               //menghapuss file foto lamaa
               $galeri=$this->m_galeri->detail($id_galeri);
               if ($galeri->sampul !=""){
                   unlink('./sampul/'.$galeri->sampul);
               }
               //end menghapus fotoo

                $data = array('id_galeri' => $id_galeri);
                $this->m_galeri->delete($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus');
                redirect('galeri');

        }

        public function tambah_foto($id_galeri)
        {
            $this->form_validation->set_rules('ket_foto', 'Nama Galeri', 'required');
        
            // Konfigurasi upload foto
            $config['upload_path']   = './foto/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = 2000; // Ukuran foto
            $this->upload->initialize($config);
        
            if ($this->form_validation->run() == TRUE) {
                // Cek ukuran file sebelum upload
                if ($_FILES['foto']['size'] > $config['max_size'] * 1024) {
                    $this->session->set_flashdata('error', 'Ukuran file melebihi batas maksimum (2 MB)');
                    redirect('galeri/tambah_foto/' . $id_galeri);
                } else {
                    if (!$this->upload->do_upload('foto')) {
                        $galeri = $this->m_galeri->detail($id_galeri);
                        $data = array(
                            'title'  => 'SMAN 1 TAKISUNG',
                            'title2' => 'Tambah Foto Galeri :' . $galeri->nama_galeri,
                            'error'  => $this->upload->display_errors(),
                            'galeri' => $galeri,
                            'foto'   => $this->m_galeri->lists_foto($id_galeri),
                            'isi'    => 'admin/galeri/v_tambah_foto'
                        );
                        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                    } else {
                        $upload_data = array('uploads' => $this->upload->data());
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './sampul/' . $upload_data['uploads']['file_name'];
                        $this->load->library('image_lib', $config);
        
                        $data = array(
                            'id_galeri' => $id_galeri,
                            'ket_foto'  => $this->input->post('ket_foto'),
                            'foto'      => $upload_data['uploads']['file_name']
                        );
                        $this->m_galeri->tambah_foto($data);
                        $this->session->set_flashdata('pesan', 'Foto Berhasil Di Ditambahkan!');
                        redirect('galeri/tambah_foto/' . $id_galeri);
                    }
                }
            } else {
                $galeri = $this->m_galeri->detail($id_galeri);
                $data = array(
                    'title'  => 'SMAN 1 TAKISUNG',
                    'title2' => 'Tambah Foto Galeri :' . $galeri->nama_galeri,
                    'galeri' => $galeri,
                    'foto'   => $this->m_galeri->lists_foto($id_galeri),
                    'isi'    => 'admin/galeri/v_tambah_foto'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            }
        }
                

    public function delete_foto($id_galeri,$id_foto)
    {
           //menghapuss file foto lamaa
           $foto=$this->m_galeri->detail_foto($id_foto);
           if ($foto->foto !=""){
               unlink('./foto/'.$foto->foto);
           }
           //end menghapus fotoo

            $data = array('id_foto' => $id_foto);
            $this->m_galeri->delete_foto($data);
            $this->session->set_flashdata('pesan', 'Foto Berhasil Di Hapus');
            redirect('galeri/tambah_foto/'.$id_galeri);

    }

}
