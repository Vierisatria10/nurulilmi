<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang_model extends CI_Model {

	var $tabledakwah = 'bidang_dakwah';
    var $tablebaitulmal = 'bidang_baitulmal';
    var $tablekepemudaan = 'bidang_kepemudaan';
    var $tablehumas      = 'bidang_humas';
    var $tablesdm        = 'bidang_sdm';
    var $tableumum       = 'bidang_umum';

    // Bidang ibadah & Dakwah
    public function getDataDakwah()
	{
		return $this->db->get($this->tabledakwah)->result();
	}

    public function add_dakwah($save) {
        return $this->db->insert($this->tabledakwah, $save);
        // return $this->db->insert_id();
    }

    public function update_dakwah($id_dakwah, $data)
    {
        $this->db->where('id_dakwah', $id_dakwah);
		$this->db->update($this->tabledakwah, $data);
    }

    public function checkDakwahImage($id_dakwah)
    {
        $query = $this->db->get_where($this->tabledakwah, ['id_dakwah' => $id_dakwah]);
        return $query->row();
    }

    public function deleteDakwah($id_dakwah, $del)
	{
		$this->db->where('id_dakwah', $id_dakwah);
		return $this->db->delete($this->tabledakwah, $del);
	}
    // end bidang ibadah & dakwah

    // bidang baitul mal
    public function getDataBaitul()
	{
		return $this->db->get($this->tablebaitulmal)->result();
	}

    public function add_baitul($save) {
        return $this->db->insert($this->tablebaitulmal, $save);
        // return $this->db->insert_id();
    }

    public function update_baitul($id_baitul, $data)
    {
        $this->db->where('id_baitul', $id_baitul);
		$this->db->update($this->tablebaitulmal, $data);
    }

    public function checkBaitulImage($id_baitul)
    {
        $query = $this->db->get_where($this->tablebaitulmal, ['id_baitul' => $id_baitul]);
        return $query->row();
    }

    public function deleteBaitul($id_baitul, $del)
	{
		$this->db->where('id_baitul', $id_baitul);
		return $this->db->delete($this->tablebaitulmal, $del);
	}

    // Bidang kepemudaan
    public function getDataKepemudaan()
	{
		return $this->db->get($this->tablekepemudaan)->result();
	}

    public function add_kepemudaan($save) {
        return $this->db->insert($this->tablekepemudaan, $save);
        // return $this->db->insert_id();
    }

    public function update_kepemudaan($id_pemuda, $data)
    {
        $this->db->where('id_pemuda', $id_pemuda);
		$this->db->update($this->tablekepemudaan, $data);
    }

    public function checkKepemudaanImage($id_pemuda)
    {
        $query = $this->db->get_where($this->tablekepemudaan, ['id_pemuda' => $id_pemuda]);
        return $query->row();
    }

    public function deleteKepemudaan($id_pemuda, $del)
	{
		$this->db->where('id_pemuda', $id_pemuda);
		return $this->db->delete($this->tablekepemudaan, $del);
	}

    // bidang humas
    public function getDataHumas()
	{
		return $this->db->get($this->tablehumas)->result();
	}

    public function add_humas($save) {
        return $this->db->insert($this->tablehumas, $save);
        // return $this->db->insert_id();
    }

    public function update_humas($id_humas, $data)
    {
        $this->db->where('id_humas', $id_humas);
		$this->db->update($this->tablehumas, $data);
    }

    public function checkHumasImage($id_humas)
    {
        $query = $this->db->get_where($this->tablehumas, ['id_humas' => $id_humas]);
        return $query->row();
    }

    public function deleteHumas($id_humas, $del)
	{
		$this->db->where('id_humas', $id_humas);
		return $this->db->delete($this->tablehumas, $del);
	}

}