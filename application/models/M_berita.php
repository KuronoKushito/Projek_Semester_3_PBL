<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {

	public function lists()
	{
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->order_by('id_berita','asc');
        $this->db->join('admin', 'admin.id_admin = berita.id_admin', 'left');
        return $this->db->get()->result();
	}

    public function detail($id_berita)
	{
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('id_berita', $id_berita);
        return $this->db->get()->row();
	}

    public function tambah($data)
    {
        $this->db->insert('berita', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_berita', $data['id_berita']);
        $this->db->update('berita', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_berita', $data['id_berita']);
        $this->db->delete('berita', $data);
    }

}
