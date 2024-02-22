<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model {

	var $table = 'tbl_setting';

    public function getDataSetting()
	{
		return $this->db->get($this->table)->result();
	}

    public function add_setting($save) {
        return $this->db->insert($this->table, $save);
        // return $this->db->insert_id();
    }

    public function get_setting_detail($id_setting)
	{
		return $this->db->get_where($this->table, ['id_setting' => $id_setting])->row();
	}

    public function checkSettingImage($id_setting)
    {
        $query = $this->db->get_where('tbl_setting', ['id_setting' => $id_setting]);
        return $query->row();
    }

    public function update_setting($id_setting, $data)
    {
        $this->db->where('id_setting', $id_setting);
		$this->db->update($this->table, $data);
    }

    public function deleteSetting($id_setting, $del)
	{
		$this->db->where('id_setting', $id_setting);
		return $this->db->delete($this->table, $del);
	}
}