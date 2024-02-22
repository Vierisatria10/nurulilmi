<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
          }
        $this->load->model('Video_model', 'video');
        $this->load->model('User_model', 'user');

    }

    public function index()
	{
        $data = [
            'judul' => 'Video',
            'title' => 'Video - Masjid Nurul Ilmi',
            'menu'  => 'video',
            'data_kategori' => $this->video->getDataKategori(),
            'data_video' => $this->video->getDataVideo()
        ];
		$this->load->view('webpage/v_video', $data);
	}
}