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

    }
    
	public function index()
	{
        $data = [
            'judul' => 'Jadwal Shalat',
            'title' => 'Jadwal Shalat - Masjid Nurul Ilmi',
            'menu'  => 'jadwal',
            'data_jadwal' => $this->jadwal->getDataJadwal()
        ];
		$this->template->load('v_template_admin', 'admin/jadwal/v_jadwal', $data);
	}

    public function simpan()
    {
        $waktu_dzuhur = $this->input->post('waktu_dzuhur');
        $waktu_ashar = $this->input->post('waktu_ashar');
        $waktu_maghrib = $this->input->post('waktu_maghrib');
        $waktu_isya = $this->input->post('waktu_isya');
        $waktu_subuh = $this->input->post('waktu_subuh');
        $waktu_imsak = $this->input->post('waktu_imsak');

        $data = [
            'waktu_dzuhur' => $waktu_dzuhur,
            'waktu_ashar'  => $waktu_ashar,
            'waktu_maghrib' => $waktu_maghrib,
            'waktu_isya'    => $waktu_isya,
            'waktu_subuh'   => $waktu_subuh,
            'waktu_imsak'   => $waktu_imsak
        ];

        $this->jadwal->insert_jadwal($data);
        $this->session->set_flashdata('success', 'Data Jadwal Shalat di Simpan');
        redirect('admin/jadwal');
    }

    public function change_status($id_jadwal, $status) {
        $this->jadwal->updateStatus($id_jadwal, $status);
        $this->session->set_flashdata('success', 'Jadwal Shalat Berhasil di Publish');
        redirect('admin/jadwal');
    }
}