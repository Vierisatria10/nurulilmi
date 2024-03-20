<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model {

	var $table = 'tbl_setting';

    public function getDataSetting()
	{
        $this->db->select('a.*, b.*');
        $this->db->from('tbl_setting a');
        $this->db->join('tbl_jadwal b', 'b.id_jadwal = a.id_jadwal', 'left');
		return $this->db->get()->result();
	}

    public function getPrayerTime()
    {
        // Query untuk mengambil jam mundur dari tabel setting dengan join tabel jadwal
        // $query = $this->db->query("SELECT b.jam AS time_mundur FROM tbl_setting a JOIN tbl_jadwal b ON a.id_jadwal = b.id_jadwal WHERE b.jam > NOW()");

        // // Ambil hasil query
        // return $query->row();
        $this->db->select('b.jam');
        $this->db->from('tbl_setting a');
        $this->db->join('tbl_jadwal b', 'a.id_jadwal = b.id_jadwal');
        $this->db->where('b.jam > NOW()');
        $query = $this->db->get();

        // Ambil waktu shalat dari hasil query
        $result = $query->result_array();

        // Kembalikan waktu shalat
        return $result;
        // $this->db->select('TIMEDIFF(b.jam, NOW()) AS shalat_mundur');
        // $this->db->from('tbl_setting a');
        // // Tambahkan kondisi WHERE untuk mendapatkan jam mundur yang positif
        // $this->db->where('TIMEDIFF(b.jam, NOW()) >', '0');
        // $this->db->join('tbl_jadwal b', 'a.id_jadwal = b.id_jadwal');
        // $query = $this->db->get();

        // return $query->row();
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

    public function update_setting($id_setting, $data) {
        $this->db->where('id_setting', $id_setting);
        $this->db->update('tbl_setting', $data);
    }

    public function upload_files($id_setting) {
        $config['upload_path'] = './upload/setting/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
        $config['encrypt_name']  = False;


        $this->load->library('upload', $config);

        // Unlink file lama dan upload file baru jika ada
        $this->unlink_and_upload_file($id_setting, 'logo');
        $this->unlink_and_upload_file($id_setting, 'banner1');
        $this->unlink_and_upload_file($id_setting, 'banner2');
        $this->unlink_and_upload_file($id_setting, 'banner3');
        
    }

    public function unlink_and_upload_file($id_setting, $field_name) {
        $query = $this->db->get_where('tbl_setting', array('id_setting' => $id_setting));
        $setting = $query->row_array();

        // Jika ada file baru yang diupload, hapus file lama
        if (!empty($_FILES[$field_name]['name'])) {
            $file_path = './upload/setting/' . $setting[$field_name];
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }

        // Upload file baru
        if ($this->upload->do_upload($field_name)) {
            $file_data = $this->upload->data();
            $this->db->where('id_setting', $id_setting);
            $this->db->update('tbl_setting', array($field_name => $file_data['file_name']));
        }
    }

    public function deleteSetting($id_setting, $del)
	{
		$this->db->where('id_setting', $id_setting);
		return $this->db->delete($this->table, $del);
	}
}