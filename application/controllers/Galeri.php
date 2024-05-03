<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Galeri_model', 'galeri');
		$this->load->model('Setting_model', 'setting');

	}

	public function index()
	{
        $data = [
            'judul' => 'Galeri',
            'title' => 'Galeri - Masjid Nurul Ilmi',
            'menu'  => 'galeri',
            'data_galeri' => $this->galeri->getDataGaleri(),
			'data_setting' => $this->setting->getDataSetting()

        ];
		$this->load->view('webpage/v_galeri', $data);
	}
}