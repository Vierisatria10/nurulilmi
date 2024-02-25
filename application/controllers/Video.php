<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

    public function __construct(){
        parent::__construct();
        
        $this->load->model('Video_model', 'video');
        $this->load->model('User_model', 'user');
        $this->load->model('Setting_model', 'setting');

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
}