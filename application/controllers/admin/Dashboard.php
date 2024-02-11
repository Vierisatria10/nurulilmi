<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
        $data = [
            'judul' => 'Dashboard',
            'title' => 'Dashboard - Masjid Nurul Ilmi',
            'menu'  => 'dashboard',
        ];
		$this->template->load('v_template_admin', 'admin/v_dashboard', $data);
	}
}