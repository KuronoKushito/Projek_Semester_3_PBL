<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_guru');
        $this->load->model('m_mapel');
    }

	public function index()
	{
		$data = array(
            'title'  => 'SMAN 1 TAKISUNG',
            'title2' => 'Data Guru',
            'guru'  => $this->m_guru->lists(), //ini adalah variabel untuk mendefinisikan di foreach di v_guru ($guru as $key => $value)
            'isi' 	 => 'admin/guru/v_list'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
	}

    public function tambah()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('id_mapel', 'Mata Pelajaran', 'required');
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
    
        // Konfigurasi upload file
        $config['upload_path']   = './foto_guru/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = 2000; // Ukuran foto
        $this->upload->initialize($config);
    
        // Validasi form
        if ($this->form_validation->run() == TRUE) {
            // Validasi ukuran file sebelum upload
            if ($_FILES['foto_guru']['size'] > $config['max_size'] * 1024) {
                $data = array(
                    'title'  => 'SMAN 1 TAKISUNG',
                    'title2' => 'Tambah Data Guru',
                    'error'  => 'Ukuran file melebihi batas maksimum (2 MB)',
                    'mapel'  => $this->m_mapel->lists(),
                    'isi'    => 'admin/guru/v_tambah'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            } else {
                // Upload file
                if (!$this->upload->do_upload('foto_guru')) {
                    $data = array(
                        'title'  => 'SMAN 1 TAKISUNG',
                        'title2' => 'Tambah Data Guru',
                        'error'  => $this->upload->display_errors(),
                        'mapel'  => $this->m_mapel->lists(),
                        'isi'    => 'admin/guru/v_tambah'
                    );
                    $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                } else {
                    // File berhasil diupload
                    $upload_data = array('uploads' => $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image']  = './foto_guru/' . $upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);
    
                    // Data untuk dimasukkan ke database
                    $data = array(
                        'nip'        => $this->input->post('nip'),
                        'nama_guru'  => $this->input->post('nama_guru'),
                        'tempat_lahir' => $this->input->post('tempat_lahir'),
                        'tgl_lahir'  => $this->input->post('tgl_lahir'),
                        'id_mapel'   => $this->input->post('id_mapel'),
                        'pendidikan' => $this->input->post('pendidikan'),
                        'foto_guru'  => $upload_data['uploads']['file_name'],
                        'id_admin'   => $this->session->userdata('id_admin')
                    );
                    // Masukkan data ke database
                    $this->m_guru->tambah($data);
                    $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambahkan!');
                    redirect('guru');
                }
            }
        } else {
            // Jika form tidak valid
            $data = array(
                'title'  => 'SMAN 1 TAKISUNG',
                'title2' => 'Tambah Data Guru',
                'mapel'  => $this->m_mapel->lists(),
                'isi'    => 'admin/guru/v_tambah'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
        }
    }
    

    public function edit($id_guru)
{
    $this->form_validation->set_rules('nip', 'NIP', 'required');
    $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required');
    $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
    $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('id_mapel', 'Mata Pelajaran', 'required');
    $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');

    if ($this->form_validation->run() == TRUE) {
        $config['upload_path']   = './foto_guru/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = 2000;
        $this->upload->initialize($config);

        // Cek apakah ada file foto yang diunggah
        if (!empty($_FILES['foto_guru']['name'])) {
            // Validasi ukuran file sebelum upload
            if ($_FILES['foto_guru']['size'] > $config['max_size'] * 1024) {
                $data = array(
                    'title'        => 'SMAN 1 TAKISUNG',
                    'title2'       => 'Edit Data Guru',
                    'error_upload' => 'Ukuran file melebihi batas maksimum (2 MB)',
                    'guru'         => $this->m_guru->detail($id_guru),
                    'mapel'        => $this->m_mapel->lists(),
                    'isi'          => 'admin/guru/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                return; // Keluar dari method jika upload gagal
            }

            if (!$this->upload->do_upload('foto_guru')) {
                $data = array(
                    'title'        => 'SMAN 1 TAKISUNG',
                    'title2'       => 'Edit Data Guru',
                    'error_upload' => $this->upload->display_errors(),
                    'guru'         => $this->m_guru->detail($id_guru),
                    'mapel'        => $this->m_mapel->lists(),
                    'isi'          => 'admin/guru/v_edit'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                return; // Keluar dari method jika upload gagal
            }

            // Menghapus file foto lama
            $guru = $this->m_guru->detail($id_guru);
            if ($guru->foto_guru != "") {
                unlink('./foto_guru/' . $guru->foto_guru);
            }

            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './foto_guru/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $foto_guru = $upload_data['uploads']['file_name'];
        } else {
            // Jika tidak ada file foto yang diunggah, gunakan foto lama
            $foto_guru = $this->input->post('foto_guru_lama');
        }

        $data = array(
            'id_guru'      => $id_guru,
            'nip'          => $this->input->post('nip'),
            'nama_guru'    => $this->input->post('nama_guru'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir'    => $this->input->post('tgl_lahir'),
            'id_mapel'     => $this->input->post('id_mapel'),
            'pendidikan'   => $this->input->post('pendidikan'),
            'foto_guru'    => $foto_guru,
            'id_admin'     => $this->session->userdata('id_admin')
        );

        $this->m_guru->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit!');
        redirect('guru');
    } else {
        $data = array(
            'title'  => 'SMAN 1 TAKISUNG',
            'title2' => 'Edit Data Guru',
            'mapel'  => $this->m_mapel->lists(),
            'guru'   => $this->m_guru->detail($id_guru),
            'isi'    => 'admin/guru/v_edit'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
}

    


    public function delete($id_guru)
        {
                //menghapuss file foto lamaa
                $guru=$this->m_guru->detail($id_guru);
                if ($guru->foto_guru !=""){
                    unlink('./foto_guru/'.$guru->foto_guru);
                }
                //end menghapus fotoo

                $data = array('id_guru' => $id_guru);
                $this->m_guru->delete($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus');
                redirect('guru');

        }
}
