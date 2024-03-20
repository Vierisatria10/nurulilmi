<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

	var $table = 'tbl_artikel';
    var $table_kategori = 'tbl_kategori_artikel';

    public function getDataArtikel()
	{
        $this->db->select('a.*, b.*');
        $this->db->from('tbl_artikel a');
        $this->db->join('tbl_kategori_artikel b', 'b.id_kategori = a.id_kategori', 'left');
        return $this->db->get()->result(); 
	}

    public function getArtikel()
    {
        $this->db->select('a.*, b.*');
        $this->db->from('tbl_artikel a');
        $this->db->join('tbl_kategori_artikel b', 'b.id_kategori = a.id_kategori', 'left');
        $this->db->limit(3);
        $this->db->where('a.status', '1');
        $this->db->order_by('a.judul', 'DESC');
        return $this->db->get()->result(); 
    }

    public function getDataArtikelDetail()
    {
        $this->db->select('a.*, b.*');
        $this->db->from('tbl_artikel a');
        $this->db->join('tbl_kategori_artikel b', 'b.id_kategori = a.id_kategori', 'left');        
        $this->db->where('a.status', '1');
        $this->db->order_by('a.judul', 'DESC');
        return $this->db->get()->result_array();
    }

    // public function getDataKategoriArtikel()
    // {
    //     $this->db->select('a.*, b.*');
    //     $this->db->from('tbl_artikel a');
    //     $this->db->join('tbl_kategori_artikel b', 'b.id_kategori = a.id_kategori', 'left');        
    //     $this->db->where('a.status', '1');
    //     $this->db->order_by('a.judul', 'DESC');
    //     return $this->db->get()->result_array();
    // }

    public function get_detail_artikel($slug)
	{
		return $this->db->get_where($this->table, ['slug' => $slug])->row_array();
	}

    public function get_detail_kategori($slug_kategori)
	{
        $this->db->select('a.*, b.*');
        $this->db->from('tbl_artikel a');
        $this->db->join('tbl_kategori_artikel b', 'a.id_kategori = b.id_kategori', 'left');
        $this->db->where('b.slug_kategori', $slug_kategori);
		return $this->db->get()->row_array();
	}

    public function countArtikelByKategori() {
        $this->db->select('tbl_kategori_artikel.*, COUNT(tbl_artikel.id_kategori) as jumlah');
        $this->db->from('tbl_kategori_artikel');
        $this->db->join('tbl_artikel', 'tbl_kategori_artikel.id_kategori = tbl_artikel.id_kategori', 'left');
        $this->db->group_by('tbl_kategori_artikel.id_kategori');
        return $this->db->get()->result();
    }

    public function getDataArtikelLoad($limit, $offset)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->limit($limit, $offset);
        $this->db->where('status', '1');
        $this->db->order_by('judul', 'ASC');
        return $this->db->get()->result_array();
    }

    public function getDataKategoriLoad($limit, $offset)
    {
        $this->db->select('a.*, b.*');
        $this->db->from('tbl_artikel a');
        $this->db->limit($limit, $offset);
        $this->db->join('tbl_kategori_artikel b', 'a.id_kategori = b.id_kategori', 'left');
        $this->db->where('status', '1');
		return $this->db->get()->result_array();
    }

    public function getCityData() {
        $url = "http://api.myquran.com/v2/sholat/kota/semua";
        $response = $this->curl->simple_get($url);
        return json_decode($response, true);
    }

    public function getShalatSchedule($cityId) {
        $date = date('Y-m-d');
        $url = "http://api.myquran.com/v2/sholat/jadwal/". $cityId . "/" . $date;
        $response = $this->curl->simple_get($url);
        return json_decode($response, true);
    }
    
    public function getArtikelByKategori($id_kategori, $limit, $offset) {
        $this->db->limit($limit, $offset);
        $this->db->order_by('tanggal_dibuat', 'desc');
        return $this->db->get_where('tbl_artikel', array('id_kategori' => $id_kategori))->result();
    }

    public function search($keyword)
    {
        if(!$keyword){
		    return null;
	    }
        $this->db->select('*');
        $this->db->from('tbl_artikel');
        $this->db->like('judul', $keyword);
        $this->db->or_like('status', $keyword);
        return $this->db->get()->result();
    }

    public function insert_artikel($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function get_artikel_edit($id_artikel)
	{
		return $this->db->get_where($this->table, ['id_artikel' => $id_artikel])->row();
	}

    public function update_artikel($id_artikel, $data)
    {
        $this->db->where('id_artikel', $id_artikel);
		$this->db->update($this->table, $data);
    }

    public function updateStatus($id_artikel, $status) {
        $data = array('status' => $status);
        $this->db->where('id_artikel', $id_artikel);
        $this->db->update('tbl_artikel', $data);
    }

    public function checkArtikelImage($id_artikel)
    {
        $query = $this->db->get_where($this->table, ['id_artikel' => $id_artikel]);
        return $query->row();
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