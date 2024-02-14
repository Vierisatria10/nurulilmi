<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda_model extends CI_Model {

	var $table = 'tbl_agenda';

    public function getDataAgenda()
	{
        return $this->db->get($this->table)->result();
	}

    public function add_agenda($save) {
        return $this->db->insert($this->table, $save);
        // return $this->db->insert_id();
    }

    public function search($keyword)
    {
        if(!$keyword){
		    return null;
	    }
        $this->db->select('*');
        $this->db->from('tbl_agenda');
        $this->db->like('judul', $keyword);
        $this->db->or_like('lokasi', $keyword);
        return $this->db->get()->result();
    }

    public function get_agenda_detail($id_agenda)
	{
		return $this->db->get_where($this->table, ['id_agenda' => $id_agenda])->row();
	}

    public function get_detail_agenda($id_agenda)
	{
		return $this->db->get_where($this->table, ['id_agenda' => $id_agenda])->row();
	}

    public function checkAgendaImage($id_agenda)
    {
        $query = $this->db->get_where($this->table, ['id_agenda' => $id_agenda]);
        return $query->row();
    }

    public function update_agenda($id_agenda, $data)
    {
        $this->db->where('id_agenda', $id_agenda);
		$this->db->update($this->table, $data);
    }

    public function deleteAgenda($id_agenda, $del)
	{
		$this->db->where('id_agenda', $id_agenda);
		return $this->db->delete($this->table, $del);
	}
}