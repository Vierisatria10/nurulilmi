<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

    public function __construct(){
        parent::__construct();
        
        $this->load->model('Video_model', 'video');
        $this->load->model('User_model', 'user');
        $this->load->model('Setting_model', 'setting');
        $this->load->library('myquran_curl');
    }

    public function index()
	{
        $data = [
            'judul' => 'Video',
            'title' => 'Video - Masjid Nurul Ilmi',
            'menu'  => 'video',
            'data_kategori' => $this->video->getDataKategori(),
            'data_video' => $this->video->getDataVideo(),
            'data_setting' => $this->setting->getDataSetting()

        ];
		$this->load->view('webpage/v_video', $data);
	}

    public function cari_video()
    {
        $keyword = $this->input->post('keyword');
        $data = [
            'judul' => 'Video',
            'title' => 'Video - Masjid Nurul Ilmi',
            'menu'  => 'video',
            'data_setting' => $this->setting->getDataSetting()

        ];
        $data['data_video'] = $this->video->search($keyword);
        if (empty($data['data_video'])) {
            $data['pesan'] = 'Data yang Anda Cari tidak ditemukan.';
        }
		$this->load->view('webpage/v_video', $data);
    }

    public function kategori_video($slug)
    {
        $data = [
            'judul' => 'Kategori Video',
            'title' => 'Kategori Video - Masjid Nurul Ilmi Talaga Bestari',
            'data_video' => $this->video->getDataVideo(),
            'data_setting' => $this->setting->getDataSetting(),
            'detail_kategori' => $this->video->get_detail_kategori($slug)->result(),
            'menu'  => 'video',
        ];
		$this->load->view('webpage/v_kategorivideo', $data);
    }

    public function getCityData() {
        $cities = $this->myquran_curl->get_city_data();
        echo json_encode($cities);
    }

    public function getShalatSchedule() {
        $cityId = $this->input->post('city_id');
        $jadwal_shalat = $this->myquran_curl->get_jadwal_shalat($cityId);
        echo json_encode($jadwal_shalat);
    }

    public function loadMoreKategori($offset) {
        $limit = 1;
        $data = $this->video->getDataKategoriLoad($limit, $offset);
        echo json_encode($data);
    }
}