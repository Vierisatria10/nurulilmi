<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('Jadwal_model', 'jadwal');
        $this->load->model('Setting_model', 'setting');
        $this->load->model('Artikel_model', 'artikel');
        $this->load->model('Agenda_model', 'agenda');
        $this->load->model('Sejarah_model', 'sejarah');
        $this->load->model('Pimpinan_model', 'pimpinan');
        $this->load->model('Video_model', 'video');
        $this->load->model('Imam_model', 'imam');

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
            'jumlah_video' => $this->video->count_video(),
            'data_sejarah' => $this->sejarah->getDataSejarah(),
            'data_imam'    => $this->imam->get_data_imam(),
            'data_setting' => $this->setting->getDataSetting()

        ];
		$this->load->view('webpage/v_home', $data);
	}

    public function getPrayerTime()
    {
         // Panggil model untuk mendapatkan waktu shalat
        $data = $this->setting->getPrayerTime(); // Ubah your_model dengan nama model Anda
        // $data['prayer_time'] = $prayer_time;
        // Kembalikan waktu shalat dalam format yang sesuai (misalnya, dalam format JSON)
        // var_dump($data);exit;
         // Kembalikan waktu shalat dalam format JSON
        header('Content-Type: application/json'); // Set header sebagai JSON
        echo json_encode($data);
    }
}