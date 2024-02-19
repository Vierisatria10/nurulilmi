<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
          }
        // $this->load->model('UserModel', 'user');
    }
	public function index()
	{
        $data = [
            'judul' => 'Dashboard',
            'title' => 'Dashboard - Masjid Nurul Ilmi',
            'menu'  => 'dashboard',
        ];
		$this->template->load('v_template_admin', 'pengurus/v_dashboard', $data);
	}
}