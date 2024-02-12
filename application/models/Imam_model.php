<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imam_model extends CI_Model {

	var $table = 'tbl_imam';

    public function getDataImam()
	{
		return $this->db->get($this->table)->result_array();
	}

    public function add_imam($save) {
        return $this->db->insert($this->table, $save);
        // return $this->db->insert_id();
    }
}