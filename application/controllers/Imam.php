<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imam extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Imam_model', 'imam');
	}

	public function index()
	{
        $data = [
            'judul' => 'Imam & Muadzin',
            'title' => 'Imam & Muadzin - Masjid Nurul Ilmi',
            'menu'  => 'imam',
            'data_imam' => $this->imam->getDataImam()
        ];
		$this->load->view('webpage/v_imam', $data);
	}
}