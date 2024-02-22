<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video_model extends CI_Model {

	var $table = 'tbl_video';
    var $table_kategori = 'tbl_kategori_video';

    public function getDataVideo()
    {
        $this->db->select('a.*, b.*');
        $this->db->from('tbl_video a');
        $this->db->join('tbl_kategori_video b', 'b.id_kat_video = a.id_kat_video', 'left');
        return $this->db->get()->result();    
    }

    public function insert_video($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function getDataKategori()
	{
        // $this->db->where('status', '1');
        return $this->db->get($this->table_kategori)->result();
	}

    public function insert_kategori($data)
    {
        return $this->db->insert($this->table_kategori, $data);
    }

    public function update_kategori($id_kat_video, $data)
    {
        $this->db->where('id_kat_video', $id_kat_video);
        $this->db->update($this->table_kategori, $data);
    }

    public function delete_kategori($id_del) 
    {
        $this->db->where('id_kat_video', $id_del);
        $this->db->delete($this->table_kategori);
    }
}