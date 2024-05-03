<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Struktur_model', 'struktur');
		$this->load->model('Setting_model', 'setting');

	}

	public function index()
	{
        $data = [
            'judul' => 'Struktur Organisasi',
            'title' => 'Struktur Organisasi - Masjid Nurul Ilmi',
            'menu'  => 'struktur',
            'data_struktur' => $this->struktur->getDataStruktur(),
			'data_setting' => $this->setting->getDataSetting()

        ];
		$this->load->view('webpage/v_struktur', $data);
	}
}