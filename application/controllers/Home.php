<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('Jadwal_model', 'jadwal');
        $this->load->model('Setting_model', 'setting');
        $this->load->model('Artikel_model', 'artikel');
        $this->load->model('Agenda_model', 'agenda');
        $this->load->model('Pimpinan_model', 'pimpinan');

    }

	public function index()
	{
        $data = [
            'judul' => 'Home',
            'title' => 'Home - Masjid Nurul Ilmi',
            'menu'  => 'home',
            'artikel' => $this->artikel->getArtikel(),
            'agenda'  => $this->agenda->getAgenda(),
            'data_jadwal' => $this->jadwal->getDataJadwalDetail(),
            'jumlah_agenda' => $this->agenda->count_agenda(),
            'jumlah_pengurus' => $this->pimpinan->count_pengurus(),
            'data_setting' => $this->setting->getDataSetting()

        ];
		$this->load->view('webpage/v_home', $data);
	}

    public function getPrayerTime()
    {
         // Panggil model untuk mendapatkan waktu shalat
        $data['reverse_time'] = $this->setting->getPrayerTime(); // Ubah your_model dengan nama model Anda

        // Kembalikan waktu shalat dalam format yang sesuai (misalnya, dalam format JSON)
        echo json_encode($data);
    }
}