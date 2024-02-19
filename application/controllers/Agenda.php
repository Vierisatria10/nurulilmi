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
            'data_agenda' => $this->agenda->getDataAgendaDetail()
        ];
        $this->load->view('webpage/v_agenda', $data);
	}

    public function cari_agenda()
    {
        $keyword = $this->input->post('keyword');
        $data = [
            'judul' => 'Agenda',
            'title' => 'Agenda - Masjid Nurul Ilmi',
            'menu'  => 'agenda',
        ];
        $data['data_agenda'] = $this->agenda->search($keyword);
        if (empty($data['data_agenda'])) {
            $data['pesan'] = 'Data yang Anda Cari tidak ditemukan.';
        }
		$this->load->view('webpage/v_agenda', $data);
    }

    public function detailAgenda($slug)
    {
        $data = [
            'judul' => 'Detail Agenda',
            'title' => 'Detail Agenda - Masjid Nurul Ilmi',
            'data_agenda' => $this->agenda->getDataAgendaDetail(),
            'agenda' => $this->agenda->get_detail_agenda($slug),
            'menu'  => 'agenda',
        ];
		$this->load->view('webpage/v_detailagenda', $data);
    }
}
