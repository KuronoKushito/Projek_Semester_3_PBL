<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_mapel');
    }

	public function index()
	{
		$data = array(
            'title'  => 'SMAN 1 TAKISUNG',
            'title2' => 'Mata Pelajaran',
            'mapel'  => $this->m_mapel->lists(), //ini adalah variabel untuk mendefinisikan di foreach di v_mapel ($mapel as $key => $value)
            'isi' 	 => 'admin/v_mapel'
        );
        $this->load->view('admin/layout/v_wrapper',$data,FALSE);
	}

    public function tambah()
    {
        $data = array(
            'nama_mapel' => $this->input->post('nama_mapel')
        );
        $this->m_mapel->tambah($data); //ini adalah function di dalam Modal M_mapel
        $this->session->set_flashdata('pesan', 'Data Berhasil Di tambahkan!');
        redirect('mapel');
    }

    public function edit($id_mapel)
    {
        $data = array(
            'id_mapel'   => $id_mapel,
            'nama_mapel' => $this->input->post('nama_mapel')
        );
        $this->m_mapel->edit($data); 
        $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit!');
        redirect('mapel');
    }

    public function delete($id_mapel)
    {
        $data = array(
            'id_mapel'   => $id_mapel
        );
        $this->m_mapel->delete($data); 
        $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus!!');
        redirect('mapel');
    }
}
