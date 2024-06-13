<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengumuman extends CI_Model {

	public function lists()
	{
        $this->db->select('*');
        $this->db->from('pengumuman');
        $this->db->order_by('id_pengumuman','asc');
        $this->db->join('admin', 'admin.id_admin = pengumuman.id_admin', 'left');
        return $this->db->get()->result();
	}

    public function detail($id_pengumuman)
	{
        $this->db->select('*');
        $this->db->from('pengumuman');
        $this->db->where('id_pengumuman', $id_pengumuman);
        return $this->db->get()->row();
	}

    public function tambah($data)
    {
        $this->db->insert('pengumuman', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_pengumuman', $data['id_pengumuman']);
        $this->db->update('pengumuman', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_pengumuman', $data['id_pengumuman']);
        $this->db->delete('pengumuman', $data);
    }

}
