<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pimpinan extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Pimpinan_model', 'pimpinan');
		$this->load->model('Setting_model', 'setting');

	}

	public function index()
	{
        $data = [
            'judul' => 'Pengurus',
            'title' => 'Pengurus - Masjid Nurul Ilmi',
            'menu'  => 'pimpinan',
            'data_pimpinan' => $this->pimpinan->getDataPimpinan(),
			'data_setting' => $this->setting->getDataSetting()

        ];
		$this->load->view('webpage/v_pimpinan', $data);
	}
}