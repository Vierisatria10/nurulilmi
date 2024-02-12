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
		$this->template->load('v_template_admin', 'admin/imam/v_imam', $data);
	}

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required',
            ['required' => 'Nama Wajib diisi']
        );
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required',
            ['required' => 'Jabatan Wajib diisi']
        );
        if ($this->form_validation->run() == FALSE) {
             $data = [
                'judul' => 'Imam & Muadzin',
                'title' => 'Imam & Muadzin - Masjid Nurul Ilmi',
                'menu'  => 'tambahimam',
            ];
		    $this->template->load('v_template_admin', 'admin/imam/v_tambah', $data);
        } else {
            // File Upload Configuration
            $config['upload_path']          = './upload/imam/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
            $config['max_size']             = 10048; // 10MB
            $config['encrypt_name']         = False;
            
            $this->load->library('upload', $config);
            // $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto')) {
                $error =$this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('admin/imam/tambah');
            } else {
                $save = [
                    'nama' => $this->input->post('nama'),
                    'jabatan' => $this->input->post('jabatan'),
                    'link1' => $this->input->post('link1'),
                    'link2' => $this->input->post('link2'),
                    'link3' => $this->input->post('link3'),
                    'foto' => $this->upload->data('file_name')
                ];
                $this->imam->add_imam($save);
                $this->session->set_flashdata('success', 'Data Imam & Muadzin Berhasil di Simpan');
                redirect('admin/imam');
            }
            
        }
    }
}