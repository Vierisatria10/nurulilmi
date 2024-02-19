<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_model extends CI_Model {

	var $table = 'tbl_jadwal';

    public function getDataJadwal()
	{
        // $this->db->where('status', '1');
        return $this->db->get($this->table)->result();
	}

    public function getDataJadwalDetail()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('status', '1');
        // $this->db->order_by('judul', 'ASC');
        return $this->db->get()->result();
    }

    public function edit_jadwal($id_jadwal, $data) 
    {
        $this->db->where('id_jadwal', $id_jadwal);
        $this->db->update($this->table, $data);
    }

    public function delete_jadwal($id_del) 
    {
        $this->db->where('id_jadwal', $id_del);
        $this->db->delete($this->table);
    }

    public function insert_jadwal($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function updateStatus($id_jadwal, $status) {
        $data = array('status' => $status);
        $this->db->where('id_jadwal', $id_jadwal);
        $this->db->update('tbl_jadwal', $data);
    }
}