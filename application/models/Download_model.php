<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download_model extends CI_Model {

	var $table = 'tbl_download';

    public function getDataDownload()
    {
        return $this->db->get($this->table)->result();
    }

    public function add_download($save)
    {
        return $this->db->insert($this->table, $save);
    }

    public function search($keyword) {
        if (!$keyword) {
            return null;
        }
        $this->db->select('*');
        $this->db->from('tbl_download');
        $this->db->like('nama_file', $keyword);
        $this->db->or_like('tgl_dibuat', $keyword);
        return $this->db->get()->result();
    }

    public function update_download($id_download, $data)
    {
        $this->db->where('id_download', $id_download);
        $this->db->update($this->table, $data);
    }
}