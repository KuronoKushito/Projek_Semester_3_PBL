<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_setting extends CI_Model {

	public function detail()
	{
        $this->db->select('*');
        $this->db->from('setting');
        $this->db->where('id_setting', 1);
        return $this->db->get()->row();
	}

        public function save_setting($data)
	{
        $this->db->where('id_setting', $data['id_setting']);
        $this->db->update('setting', $data);
	}
}