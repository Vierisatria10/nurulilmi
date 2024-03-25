<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
          }
        $this->load->model('Download_model', 'download');
    }
	public function index()
	{
        $data = [
            'judul' => 'Dashboard',
            'title' => 'Dashboard - Masjid Nurul Ilmi',
            'total_download' => $this->download->count_download(),
            'menu'  => 'dashboard',
        ];
		$this->template->load('v_template_admin', 'admin/v_dashboard', $data);
	}
}