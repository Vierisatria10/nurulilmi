<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
          }
		$this->load->model('Struktur_model', 'struktur');
        $this->load->model('Download_model', 'download');
	}

	public function index()
	{
        $data = [
            'judul' => 'Struktur Organisasi',
            'title' => 'Struktur Organisasi - Masjid Nurul Ilmi',
            'menu'  => 'struktur',
            'total_download' => $this->download->count_download(),
            'data_struktur' => $this->struktur->getDataStruktur()
        ];
		$this->template->load('v_template_admin', 'admin/struktur/v_struktur', $data);
	}

    public function simpan_data()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required',
            ['required' => 'Nama Wajib diisi']
        );
       
        if ($this->form_validation->run() == FALSE) {
             $data = [
                'judul' => 'Struktur Organisasi',
                'title' => 'Struktur Organisasi - Masjid Nurul Ilmi',
                'total_download' => $this->download->count_download(),
                'menu'  => 'struktur',
            ];
		    $this->template->load('v_template_admin', 'admin/struktur/v_struktur', $data);
        } else {
            $config['upload_path']          = './upload/struktur/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
            // $config['max_size']             = 10048; // 10MB
            $config['encrypt_name']         = False;
            
            $this->load->library('upload', $config);
            // $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto')) {
                $error =$this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('admin/struktur');
            } else {
                $save = [
                    'nama' => $this->input->post('nama'),
                    'foto' => $this->upload->data('file_name')
                ];
                $result = $this->struktur->add_struktur($save);
                if ($result) {
                   $this->session->set_flashdata('success', 'Data Struktur Organisasi Berhasil di Simpan');
                    redirect('admin/struktur');
                }else {
                    $this->session->set_flashdata('error', 'Data Struktur Organisasi Gagal di Simpan');
                    redirect('admin/struktur');
                }
            }  
        }
    }
}