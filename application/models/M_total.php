<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_total extends CI_Model {

    public function get_total_guru()
    {
        return $this->db->count_all('data_guru');
    }

    public function get_total_pengumuman()
    {
        return $this->db->count_all('pengumuman');
    }

    public function get_total_berita()
    {
        return $this->db->count_all('berita');
    }

    public function get_total_galeri()
    {
        return $this->db->count_all('galeri');
    }

    public function get_total_mapel()
    {
        return $this->db->count_all('mapel');
    }


}
