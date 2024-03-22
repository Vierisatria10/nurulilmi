<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_model extends CI_Model {

	var $table = 'tbl_galeri';

    public function get_data() 
    {
       return $this->db->get('tbl_galeri');
    }

    public function simpan_galeri($insert) {
        return $this->db->insert('tbl_galeri', $insert);
    }

    public function show_edit($koser)
    {
        $this->db->where('galeri_id', $koser);
        return $this->db->get('tbl_galeri');
    }

}