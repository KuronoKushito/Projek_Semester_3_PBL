<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
    {
        parent::__construct();
        $this->load->model('m_home');
		
    }

	public function index()
	{
		$data = array(
					'title' => '',
					'berita' => $this->m_home->slider_berita(),
					'guru'	=> $this->m_home->guru_list(),
					'pengumuman' => $this->m_home->pengumuman(),
					'isi' 	=> 'v_home'
				);
		$this->load->view('layout/v_wrapperhome',$data,FALSE);
	}

	public function guru()
	{
		$data = array(
					'title' => 'Guru',
					'guru'	=> $this->m_home->guru(),
					'isi' 	=> 'v_guru'
				);
		$this->load->view('layout/v_wrapper',$data,FALSE);
	}

	public function berita()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url('home/berita'); //Base url nya di Controler Home Pada function berita di atas ini
		$config['total_rows'] = count($this->m_home->total_berita());
		$config['per_page'] = 8;
		$config['uri_segmen'] = 3;
		//start dan limit
			$limit= $config['per_page'] ;
			$start= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0;
		//-------------------------------
		$config['first_link'] 		= 'First';
		$config['last_link'] 		= 'Last';
		$config['next_link'] 		= 'Next';
		$config['prev_link'] 		= 'Prev';
		$config['full_tag_open'] 	= '<div class="pagination_container d-flex flex-row align-items-center justify-content-start text-center"><ul class="pagination_list">';
		$config['num_tag_open'] 	= '<li>';
		$config['num_tag_close'] 	= '</li>';
		$config['cur_tag_open'] 	= '<li class="active"><a>';
		$config['cur_tag_close'] 	= '</a></li>';
		$config['next_tag_open'] 	= '<li>';
		$config['next_tag_close'] 	= '</li>';
		$config['prev_tag_open'] 	= '<li>';
		$config['prev_tag_close'] 	= '</li>';
		$config['first_tag_open'] 	= '<li>';
		$config['first_tag_close'] 	= '</li>';
		$config['last_tag_open'] 	= '<li>';
		$config['last_tag_close'] 	= '</li>';
		$config['full_tag_close'] 	= '</ul></div>';
			//----------------------------------------------
			$this->pagination->initialize($config);

		$data = array(
			'paginasi' 		=> $this->pagination->create_links(),
			'latest_berita'	=> $this->m_home->latest_berita(),
			'berita' 		=> $this->m_home->berita($limit, $start),
			'title' 		=> 'Berita',
			'isi'			=> 'v_berita'
		);
		$this->load->view('layout/v_wrapper',$data,FALSE);
	}

	public function detail_berita($slug_berita)
	{
		$data = array(
			'title' 			=> 'Detail Berita',
			'latest_berita'		=> $this->m_home->latest_berita(),
			'berita'			=> $this->m_home->detail_berita($slug_berita),
			'isi' 				=> 'v_detail_berita'
		);
		$this->load->view('layout/v_wrapper',$data,FALSE);
			}

	public function galeri()
			{
				$data = array(
					'title' 	=> 'Galeri Foto',
					'galeri'	=> $this->m_home->galeri(),
					'isi' 		=> 'v_galeri'
				);
		$this->load->view('layout/v_wrapper',$data,FALSE);
			}

	public function detail_galeri($id_galeri)
			{
				$data = array(
					'title' 		=> 'Detail Galeri Foto',
					'galeri'		=> $this->m_home->detail_galeri($id_galeri),
					'nama_galeri'	=> $this->m_home->nama_galeri($id_galeri),
					'isi' 			=> 'v_detail_galeri'
				);
		$this->load->view('layout/v_wrapper',$data,FALSE);
			}

	public function pengumuman()
{
    $this->load->library('pagination');
    $config['base_url'] = base_url('home/pengumuman');
    $config['total_rows'] = count($this->m_home->pengu());
    $config['per_page'] = 8;
    $config['uri_segmen'] = 3;

    $limit = $config['per_page'];
    $start = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    // Konfigurasi Pagination
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    $config['next_link'] = 'Next';
    $config['prev_link'] = 'Prev';
    $config['full_tag_open'] = '<div class="pagination_container d-flex flex-row align-items-center justify-content-start text-center"><ul class="pagination_list">';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a>';
    $config['cur_tag_close'] = '</a></li>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['full_tag_close'] = '</ul></div>';

    $this->pagination->initialize($config);

    $data = array(
        'paginasi' => $this->pagination->create_links(),
        'pengu' => $this->m_home->pengu_paginated($limit, $start),
        'title' => 'Pengumuman',
        'isi' => 'v_pengumuman'
    );

    $this->load->view('layout/v_wrapperpengu', $data, FALSE);
}

public function profile()
{
	$data = array(
				'title' => 'Profile',
				'sekolah' => $this->m_setting->detail(),
				'isi' 	=> 'v_profile'
			);
	$this->load->view('layout/v_wrapper',$data,FALSE);
}

public function tentang()
{
	$data = array(
				'title' => 'About sekolah',
				'sekolah' => $this->m_setting->detail(),
				'isi' 	=> 'v_tentang'
			);
	$this->load->view('layout/v_wrapper',$data,FALSE);
}

public function visimisi()
{
	$data = array(
				'title' => 'Visi Misi',
				'sekolah' => $this->m_setting->detail(),
				'isi' 	=> 'v_visimisi'
			);
	$this->load->view('layout/v_wrapper',$data,FALSE);
}

}

