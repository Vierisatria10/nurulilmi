<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('Jadwal_model', 'jadwal');
    }

	public function index()
	{
        $data = [
            'judul' => 'Home',
            'title' => 'Home - Masjid Nurul Ilmi',
            'menu'  => 'home',
            'data_jadwal' => $this->jadwal->getDataJadwalDetail()
        ];
		$this->load->view('webpage/v_home', $data);
	}
}