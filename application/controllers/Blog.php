<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('Agenda_model', 'agenda');
        $this->load->model('Artikel_model', 'artikel');	
        $this->load->model('Setting_model', 'setting');
        $this->load->library('myquran_curl');
    }

	public function index()
	{
        // $date = date('Y-m-d');
        // $url = 'https://api.myquran.com/v2/sholat/jadwal/1104/'. $date;
        // $curl = curl_init();
        // curl_setopt($curl, CURLOPT_URL, $url);
        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // $waktu = curl_exec($curl);
        // curl_close($curl);
        // return json_decode($waktu, true);

        $data = [
            'judul' => 'Blog',
            'title' => 'Postingan - Masjid Nurul Ilmi',
            'menu'  => 'blog',
            'data_artikel' => $this->artikel->getDataArtikelDetail(),
            'data_agenda' => $this->agenda->getDataAgendaDetail(),
            'data_kategori' => $this->artikel->countArtikelByKategori(),
            // 'waktu' => $waktu,
            'data_setting' => $this->setting->getDataSetting(),
        ];
        $this->load->view('webpage/v_blog', $data);
	}

    public function loadMore($offset) {
        $limit = 5;
        $data =  $this->artikel->getDataArtikelLoad($limit, $offset);
        echo json_encode($data);
    }

    public function loadMoreKategori($offset) {
        $limit = 5;
        $data = $this->artikel->getDataKategoriLoad($limit, $offset);
        echo json_encode($data);
    }

    public function detail($slug)
    {
        $data = [
            'judul' => 'Detail',
            'title' => 'Detail - Masjid Nurul Ilmi',
            'data_artikel' => $this->artikel->getDataArtikelDetail(),
            'data_setting' => $this->setting->getDataSetting(),
            'detail_artikel' => $this->artikel->get_detail_artikel($slug),
            'menu'  => 'artikel',
        ];
		$this->load->view('webpage/v_detailartikel', $data);
    }

    public function kategori($slug_kategori)
    {
        $data = [
            'judul' => 'Detail Kategori',
            'title' => 'Detail Kategori - Masjid Nurul Ilmi',
            'data_artikel' => $this->artikel->getDataArtikelDetail(),
            'data_setting' => $this->setting->getDataSetting(),
            'detail_kategori' => $this->artikel->get_detail_kategori($slug_kategori),
            'menu'  => 'artikel',
        ];
		$this->load->view('webpage/v_detailkategori', $data);
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

    public function cari_blog()
    {
        $keyword = $this->input->post('keyword');
        $data = [
            'judul' => 'Blog',
            'title' => 'Postingan - Masjid Nurul Ilmi',
            'menu'  => 'blog',
            'data_setting' => $this->setting->getDataSetting()
        ];
        
        $data['data_artikel'] = $this->artikel->search($keyword);
        if (empty($data['data_artikel'])) {
            $data['pesan'] = 'Data yang Anda Cari tidak ditemukan.';
        }
		$this->load->view('webpage/v_blog', $data);
    }
}