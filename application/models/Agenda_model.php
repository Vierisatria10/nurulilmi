<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda_model extends CI_Model {

	var $table = 'tbl_agenda';

    public function getDataAgenda()
	{
        // $this->db->where('status', '1');
        return $this->db->get($this->table)->result();
	}

    public function getDataAgendaDetail()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->limit(5);
        $this->db->where('status', '1');
        $this->db->order_by('judul', 'ASC');
        return $this->db->get()->result_array();
    }

    public function getAgenda()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->limit(3);
        $this->db->where('status', '1');
        $this->db->order_by('judul', 'DESC');
        return $this->db->get()->result(); 
    }

    public function getDataAgendaLoad($limit, $offset)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->limit($limit, $offset);
        $this->db->where('status', '1');
        $this->db->order_by('judul', 'ASC');
        return $this->db->get()->result_array();
    }

    public function add_agenda($save) {
        return $this->db->insert($this->table, $save);
        // return $this->db->insert_id();
    }

    public function count_agenda() {
        return $this->db->count_all('tbl_agenda');
    }

    function get_agenda($page)
    {
        $offset = 8 * $page;
        $limit  = 8;
        $query  = "SELECT * FROM tbl_agenda WHERE status = '1' ORDER BY id_agenda DESC limit $offset ,$limit";
        $result = $this->db->query($query)->result();
        return $result;
    }  

    public function updateStatus($id_agenda, $status) {
        $data = array('status' => $status);
        $this->db->where('id_agenda', $id_agenda);
        $this->db->update('tbl_agenda', $data);
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

    public function get_agenda_edit($id_agenda)
	{
		return $this->db->get_where($this->table, ['id_agenda' => $id_agenda])->row();
	}

    public function get_detail_agenda($slug)
	{
        // $this->db->select('*');
        // $this->db->from($this->table);
        // $this->db->where('slug', $slug);
        // return $this->db->get()->row();
		return $this->db->get_where($this->table, ['slug' => $slug])->row_array();
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