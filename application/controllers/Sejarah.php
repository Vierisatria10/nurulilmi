<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Sejarah_model', 'sejarah');
		$this->load->model('Setting_model', 'setting');

	}

	public function index()
	{
        $data = [
            'judul' => 'Sejarah',
            'title' => 'Sejarah - Masjid Nurul Ilmi',
            'menu'  => 'sejarah',
            'data_sejarah' => $this->sejarah->getDataSejarah(),
			'data_setting' => $this->setting->getDataSetting()

        ];
		$this->load->view('webpage/v_sejarah', $data);
	}
}