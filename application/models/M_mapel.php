<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mapel extends CI_Model {

	public function lists()
	{
        $this->db->select('*');
        $this->db->from('mapel');
        $this->db->order_by('id_mapel','asc');
        return $this->db->get()->result();
	}

        public function tambah($data)
        {
                $this->db->insert('mapel', $data);
        }

        public function edit($data)
        {
                $this->db->where('id_mapel', $data['id_mapel']);
                $this->db->update('mapel', $data);
        }

        public function delete($data)
        {
                $this->db->where('id_mapel', $data['id_mapel']);
                $this->db->delete('mapel', $data);
        }
}
