<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

	var $table = 'tbl_artikel';
    var $table_kategori = 'tbl_kategori_artikel';

    public function getDataKategori()
	{
        // $this->db->where('status', '1');
        return $this->db->get($this->table_kategori)->result();
	}

    public function insert_kategori($data)
    {
        return $this->db->insert($this->table_kategori, $data);
    }

    public function update_kategori($id_kategori, $data)
    {
        $this->db->where('id_kategori', $id_kategori);
        $this->db->update($this->table_kategori, $data);
    }

    public function delete_kategori($id_del) 
    {
        $this->db->where('id_kategori', $id_del);
        $this->db->delete($this->table_kategori);
    }
}