<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('Agenda_model', 'agenda');	
    }

	public function index()
	{
        $data = [
            'judul' => 'Agenda',
            'title' => 'Agenda - Masjid Nurul Ilmi',
            'menu'  => 'agenda',
            'data_agenda' => $this->agenda->getDataAgenda()
        ];
		$this->load->view('webpage/v_agenda', $data);
	}
}