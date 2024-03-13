<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah_model extends CI_Model {

	var $table = 'tbl_sejarah';

    public function getDataSejarah()
	{
        // $this->db->where('status', '1');
        return $this->db->get($this->table)->result();
	}

    public function add_sejarah($save)
    {
        return $this->db->insert($this->table, $save);
    }

    public function get_sejarah_edit($id_sejarah)
	{
		return $this->db->get_where($this->table, ['id_sejarah' => $id_sejarah])->row();
	}

    public function update_sejarah($id_sejarah, $data)
    {
        $this->db->where('id_sejarah', $id_sejarah);
		$this->db->update($this->table, $data);
    }
}