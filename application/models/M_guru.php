<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model {

	public function lists()
	{
        $this->db->select('*');
        $this->db->from('data_guru');
        $this->db->join('mapel', 'mapel.id_mapel = data_guru.id_mapel', 'left'); //tabel guru berelasi dengan mapel, lalu yang berelasi yaitu berdasarkan id_mapel yang ada di database mapel =(sama dengan berelasi) berdarkan database guru dengan id_mapel barulah data2 yang ada di dalam mapel bisa gabung ke data_guru  contoh di v_list (<td><?= $value->nama_mapel ></td>) memanggil di database mapel padahal yang ada di database guru 
        $this->db->join('admin', 'admin.id_admin = data_guru.id_admin', 'left');
        $this->db->order_by('id_guru','ASC');
        return $this->db->get()->result();
	}

        public function tambah($data)
        {
                $this->db->insert('data_guru', $data);
        }

        public function detail($id_guru)
        {
                $this->db->select('*');
                $this->db->from('data_guru');
                $this->db->join('mapel', 'mapel.id_mapel = data_guru.id_mapel', 'left');
                $this->db->where('id_guru', $id_guru);
                return $this->db->get()->row();
        }

        public function edit($data)
        {
                $this->db->where('id_guru', $data['id_guru']);
                $this->db->update('data_guru', $data);
        }

        public function delete($data)
        {
                $this->db->where('id_guru', $data['id_guru']);
                $this->db->delete('data_guru', $data);
        }
}
