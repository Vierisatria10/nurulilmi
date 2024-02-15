<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	var $table = 'tbl_user';

    public function getDataUser()
	{
        // $this->db->where('status', '1');
        return $this->db->get($this->table)->result();
	}
}