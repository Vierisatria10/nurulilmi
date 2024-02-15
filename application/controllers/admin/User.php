<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
          }
        $this->load->model('User_model', 'user');
    }
	public function index()
	{
        $data = [
            'judul' => 'User',
            'title' => 'User - Masjid Nurul Ilmi',
            'menu'  => 'user',
            'data_user' => $this->user->getDataUser()
        ];
		$this->template->load('v_template_admin', 'admin/user/v_user', $data);
	}
}