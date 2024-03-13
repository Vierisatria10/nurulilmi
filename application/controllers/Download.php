<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('Download_model', 'download');
        $this->load->model('Setting_model', 'setting');

    }

	public function index()
	{
        $data = [
            'judul' => 'Download',
            'title' => 'Download - Masjid Nurul Ilmi',
            'menu'  => 'download',
            'data_setting' => $this->setting->getDataSetting(),
            'data_download' => $this->download->getDataDownload()
        ];
		$this->load->view('webpage/v_download', $data);
	}

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data = [
            'judul' => 'Download',
            'title' => 'Download - Masjid Nurul Ilmi',
            'menu'  => 'download',
            'data_setting' => $this->setting->getDataSetting(),
        ];
        $data['data_download'] = $this->download->search($keyword);
        if (empty($data['data_download'])) {
            $data['pesan'] = 'Data yang Anda Cari tidak ditemukan.';
        }
		$this->load->view('webpage/v_download', $data);

    }
}