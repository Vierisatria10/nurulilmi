<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_model extends CI_Model {

	var $table = 'tbl_kontak';

    public function getDataKontak()
	{
		return $this->db->get($this->table)->result();
	}

    public function kirim_pesan($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function getNomorHp() {
        // Gantilah 'tbl_kontak' dengan nama tabel yang sesuai di database Anda
        $result = $this->db->select('no_hp')->get('tbl_kontak')->row();
        return $result ? $result->no_hp : false;
    }

     public function getNama() {
        // Gantilah 'tbl_kontak' dengan nama tabel yang sesuai di database Anda
        $result = $this->db->select('nama')->get('tbl_kontak')->row();
        return $result ? $result->nama : false;
    }
}