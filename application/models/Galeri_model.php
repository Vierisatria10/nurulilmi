<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_model extends CI_Model {

	var $table = 'tbl_galeri';

    public function get_data() 
    {
       return $this->db->get('tbl_galeri');
    }

    public function getDataGaleri()
    {
        $this->db->select('*');
        $this->db->from('tbl_galeri');
        $query = $this->db->get()->result();
        return $query;
    }

    public function simpan_galeri($insert) {
        return $this->db->insert('tbl_galeri', $insert);
    }

    public function update_galeri($id, $data)
    {
        $this->db->where('galeri_id', $id);
		$this->db->update($this->table, $data);
    }

    public function show_edit($koser)
    {
        $this->db->where('galeri_id', $koser);
        return $this->db->get('tbl_galeri');
    }

}