<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pimpinan extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Pimpinan_model', 'pimpinan');
	}

	public function index()
	{
        $data = [
            'judul' => 'Pimpinan',
            'title' => 'Pimpinan - Masjid Nurul Ilmi',
            'menu'  => 'pimpinan',
            'data_pimpinan' => $this->pimpinan->getDataPimpinan()
        ];
		$this->load->view('webpage/v_pimpinan', $data);
	}
}