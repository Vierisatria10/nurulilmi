<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VisiMisi extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('VisiMisi_model', 'visi');
		$this->load->model('Setting_model', 'setting');

	}

	public function index()
	{
        $data = [
            'judul' => 'Visi Misi',
            'title' => 'Visi & Misi - Masjid Nurul Ilmi',
            'menu'  => 'visimisi',
            'data_visi' => $this->visi->getDataVisi(),
			'data_setting' => $this->setting->getDataSetting()

        ];
		$this->load->view('webpage/v_visi', $data);
	}
}