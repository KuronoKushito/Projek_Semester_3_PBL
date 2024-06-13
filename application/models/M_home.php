<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public function guru()
      {
          $this->db->select('*');
          $this->db->from('data_guru');
          $this->db->join('mapel', 'mapel.id_mapel = data_guru.id_mapel', 'left');
          $this->db->order_by('id_guru','desc');
          return $this->db->get()->result();
      }

	  //Memunculkan berita dengan paging
      public function berita($limit,$start)
      {
          $this->db->select('*');
          $this->db->from('berita');
          $this->db->join('admin', 'admin.id_admin = berita.id_admin', 'left');
          $this->db->order_by('id_berita','desc');
          $this->db->limit($limit,$start);
          return $this->db->get()->result();
      }
  
      public function total_berita()
      {
          $this->db->select('*');
          $this->db->from('berita');
          $this->db->join('admin', 'admin.id_admin = berita.id_admin', 'left');
          $this->db->order_by('id_berita','desc');
          return $this->db->get()->result();
      }

      public function detail_berita($slug_berita)
      {
          $this->db->select('*');
          $this->db->from('berita');
          $this->db->join('admin', 'admin.id_admin = berita.id_admin', 'left');
          $this->db->where('slug_berita',$slug_berita);
          return $this->db->get()->row();
      }

      public function latest_berita()
      {
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('admin', 'admin.id_admin = berita.id_admin', 'left');
        $this->db->order_by('id_berita','desc');
        $this->db->limit(10);//10 berita terakhir di ambil
        return $this->db->get()->result();
      }

      public function galeri()
    {
        $this->db->select('galeri.*,count(foto.id_galeri) as jml_foto'); //jumlahkan seluruh foto berdasarkan id galeri
        $this->db->from('galeri');
        $this->db->join('foto', 'foto.id_galeri = galeri.id_galeri', 'left');
        $this->db->group_by('galeri.id_galeri');
        $this->db->order_by('galeri.id_galeri','desc');
        return $this->db->get()->result(); //result itu memunculkan semua datanya kalo row ya cuma bagian2 aja
    }

    public function detail_galeri($id_galeri)
    {
        $this->db->select('*'); //jumlahkan seluruh foto berdasarkan id galeri
        $this->db->from('foto');
        $this->db->where('id_galeri', $id_galeri);
        $this->db->order_by('id_foto','desc');
        return $this->db->get()->result(); //result itu memunculkan semua datanya kalo row ya cuma bagian2 aja
    }

    public function nama_galeri($id_galeri)
    {
        $this->db->select('*'); 
        $this->db->from('galeri');
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get()->row(); //result itu memunculkan semua datanya kalo row ya cuma bagian2 aja
    }

    public function pengu()
{
    $this->db->select('*');
    $this->db->from('pengumuman');
    $this->db->order_by('id_pengumuman', 'desc');
    // Memilih tgl_pengumuman dengan format yang diinginkan
    $this->db->select("DATE_FORMAT(tgl_pengumuman, '%d-%m-%Y') as formatted_date", false);
    return $this->db->get()->result();
}

public function pengu_paginated($limit, $start)
{
    $this->db->select('*');
    $this->db->from('pengumuman');
    $this->db->order_by('id_pengumuman', 'desc');
    $this->db->limit($limit, $start);
    // Memilih tgl_pengumuman dengan format yang diinginkan
    $this->db->select("DATE_FORMAT(tgl_pengumuman, '%d-%m-%Y') as formatted_date", false);
    return $this->db->get()->result();
}

public function slider_berita()
{
  $this->db->select('*');
  $this->db->from('berita');
  $this->db->join('admin', 'admin.id_admin = berita.id_admin', 'left');
  $this->db->order_by('id_berita','desc');
  $this->db->limit(3);//10 berita terakhir di ambil
  return $this->db->get()->result();
}

public function guru_list()
	{
        $this->db->select('*');
        $this->db->from('data_guru');
        $this->db->join('mapel', 'mapel.id_mapel = data_guru.id_mapel', 'left'); //tabel guru berelasi dengan mapel, lalu yang berelasi yaitu berdasarkan id_mapel yang ada di database mapel =(sama dengan berelasi) berdarkan database guru dengan id_mapel barulah data2 yang ada di dalam mapel bisa gabung ke data_guru  contoh di v_list (<td><?= $value->nama_mapel ></td>) memanggil di database mapel padahal yang ada di database guru 
        $this->db->order_by('id_guru','desc');
        $this->db->limit(4);//10 berita terakhir di ambil
        return $this->db->get()->result();
	}

    public function pengumuman()
	{
        $this->db->select('*');
        $this->db->from('pengumuman');
        $this->db->order_by('id_pengumuman','desc');
        $this->db->select("DATE_FORMAT(tgl_pengumuman, '%d-%m-%Y') as formatted_date", false);
        $this->db->limit(3);
        return $this->db->get()->result();
	}





}
