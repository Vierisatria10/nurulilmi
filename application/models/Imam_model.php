<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imam_model extends CI_Model {

	var $table = 'tbl_imam';

    public function getDataImam()
	{
		return $this->db->get($this->table)->result();
	}

    public function add_imam($save) {
        return $this->db->insert($this->table, $save);
        // return $this->db->insert_id();
    }

    public function get_data_imam()
    {
        $this->db->select('*');
        $this->db->from('tbl_imam');
        $this->db->limit(4);
        $query = $this->db->get()->result();
        return $query;
    }

    public function get_imam_detail($id_imam)
	{
		return $this->db->get_where($this->table, ['id_imam' => $id_imam])->row();
	}

    public function get_imam($id_imam)
    {
		return $this->db->get_where($this->table, ['id_imam' => $id_imam])->row();
    }

    public function checkImamImage($id_imam)
    {
        $query = $this->db->get_where('tbl_imam', ['id_imam' => $id_imam]);
        return $query->row();
    }

    public function update_imam($id_imam, $data)
    {
        $this->db->where('id_imam', $id_imam);
		$this->db->update($this->table, $data);
    }

    public function deleteImam($id_imam, $del)
	{
		$this->db->where('id_imam', $id_imam);
		return $this->db->delete($this->table, $del);
	}
}