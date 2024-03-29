<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pimpinan_model extends CI_Model {

	var $table = 'tbl_pimpinan';

    public function getDataPimpinan()
	{
		return $this->db->get($this->table)->result();
	}

    public function add_pimpinan($save) {
        return $this->db->insert($this->table, $save);
        // return $this->db->insert_id();
    }

    public function count_pengurus() {
        return $this->db->count_all($this->table);
    }

    public function get_pimpinan($id_pimpinan)
    {
		return $this->db->get_where($this->table, ['id_pimpinan' => $id_pimpinan])->row();
    }

    public function get_pimpinan_detail($id_pimpinan)
	{
		return $this->db->get_where($this->table, ['id_pimpinan' => $id_pimpinan])->row();
	}

    public function update_pimpinan($id_pimpinan, $data)
    {
        $this->db->where('id_pimpinan', $id_pimpinan);
		$this->db->update($this->table, $data);
    }

    public function checkPimpinanImage($id_pimpinan)
    {
        $query = $this->db->get_where($this->table, ['id_pimpinan' => $id_pimpinan]);
        return $query->row();
    }

    public function deletePimpinan($id_pimpinan, $del)
	{
		$this->db->where('id_pimpinan', $id_pimpinan);
		return $this->db->delete($this->table, $del);
	}
}