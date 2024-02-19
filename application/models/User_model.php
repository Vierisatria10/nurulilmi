<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	var $table = 'tbl_user';

    public function getDataUser()
	{
        // $this->db->where('status', '1');
        return $this->db->get($this->table)->result();
	}

    public function add_user($save) {
        return $this->db->insert($this->table, $save);
        // return $this->db->insert_id();
    }

    public function get_user_detail($id_user)
	{
		return $this->db->get_where($this->table, ['id_user' => $id_user])->row();
	}

    public function update_user($id_user, $data)
    {
        $this->db->where('id_user', $id_user);
		$this->db->update($this->table, $data);
    }
}