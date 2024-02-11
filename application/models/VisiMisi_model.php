<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VisiMisi_model extends CI_Model {

	var $table = 'tbl_visimisi';

    public function getDataVisi()
	{
		return $this->db->get('tbl_visimisi')->result_array();
	}

	public function add_visi($save)
	{
		return $this->db->insert('tbl_visimisi', $save);
	}

	public function get_visi_detail($id_visi)
	{
		return $this->db->get_where('tbl_visimisi', ['id_visi' => $id_visi])->row_array();
	}

	public function edit_visi()
	{
		$visi = $this->input->post('visi');
        $misi = $this->input->post('misi');
        $edit = [
            'visi' => $visi,
            'misi' => $misi
        ];
		$this->db->where('id_visi', $this->input->get('id_visi'));
		$this->db->update('tbl_visimisi', $edit);
	}

	public function delete_visi($id_del, $data)
	{
		$this->db->where('id_visi', $id_del);
		return $this->db->delete($this->table, $data);
	}
}