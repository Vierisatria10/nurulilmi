<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur_model extends CI_Model {

	var $table = 'tbl_struktur_organisasi';

    public function getDataStruktur()
	{
		return $this->db->get($this->table)->result();
	}

     public function add_struktur($save) {
        return $this->db->insert($this->table, $save);
        // return $this->db->insert_id();
    }
}