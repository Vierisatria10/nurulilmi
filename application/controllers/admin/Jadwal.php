<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
          }
        $this->load->model('Jadwal_model', 'jadwal');
        $this->load->model('User_model', 'user');
        $this->load->model('Download_model', 'download');
    }
    
	public function index()
	{
        $data = [
            'judul' => 'Jadwal Shalat',
            'title' => 'Jadwal Shalat - Masjid Nurul Ilmi',
            'menu'  => 'jadwal',
            'total_download' => $this->download->count_download(),
            'data_jadwal' => $this->jadwal->getDataJadwal()
        ];
		$this->template->load('v_template_admin', 'admin/jadwal/v_jadwal', $data);
	}

    public function simpan()
    {
        $waktu_shalat = $this->input->post('waktu_shalat');
        $jam = $this->input->post('jam');

        $data = [
            'waktu_shalat' => $waktu_shalat,
            'jam'  => $jam
        ];

        $this->jadwal->insert_jadwal($data);
        $this->session->set_flashdata('success', 'Data Jadwal Shalat di Simpan');
        redirect('admin/jadwal');
    }

    public function update()
    {
        $id_jadwal = $this->input->post('id_jadwal');
        $waktu_shalat = $this->input->post('waktu_shalat');
        $jam = $this->input->post('jam');

        $data = [
            'waktu_shalat' => $waktu_shalat,
            'jam'  => $jam
        ];
        $this->jadwal->edit_jadwal($id_jadwal, $data);
        $this->session->set_flashdata('success', 'Data Jadwal Shalat Berhasil di Update');
        redirect('admin/jadwal');
    }

    public function delete()
    {
        $id_del = $this->input->post('id_del');
        $this->jadwal->delete_jadwal($id_del);
        $this->session->set_flashdata('success', 'Data Jadwal Shalat Berhasil di Hapus');
        redirect('admin/jadwal');
    }

    public function change_status($id_jadwal, $status) {
        $this->jadwal->updateStatus($id_jadwal, $status);
        $this->session->set_flashdata('success', 'Jadwal Shalat Berhasil di Publish');
        redirect('admin/jadwal');
    }
}