<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $username);
        $this->db->where('password', md5($password)); // Menggunakan MD5 untuk verifikasi
        return $this->db->get()->row();
    }

    public function update_user($id_admin, $nama_admin, $username, $password = null)
    {
        $data = array(
            'nama_admin' => $nama_admin,
            'username' => $username,
        );
    
        if ($password !== null && $password !== '') {
            $data['password'] = md5($password);
        }
    
        $this->db->where('id_admin', $id_admin);
        return $this->db->update('admin', $data);
    }

    public function is_username_exists($username, $current_id_admin)
    {
        $this->db->where('username', $username);
        $this->db->where_not_in('id_admin', array($current_id_admin)); // Perbaikan di sini
        $query = $this->db->get('admin'); // Ganti 'admin' dengan nama tabel admin di database Anda

        return $query->num_rows() > 0;
    }


}
