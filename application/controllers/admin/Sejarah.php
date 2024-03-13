<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
          }
        $this->load->model('Sejarah_model', 'sejarah');
        $this->load->model('User_model', 'user');

    }
	public function index()
	{
        $data = [
            'judul' => 'Sejarah',
            'title' => 'Sejarah - Masjid Nurul Ilmi',
            'menu'  => 'sejarah',
            'data_sejarah' => $this->sejarah->getDataSejarah()
        ];
		$this->template->load('v_template_admin', 'admin/sejarah/v_sejarah', $data);
	}

    public function tambah()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required',
            ['required' => 'Judul Wajib diisi']
        );

        if ($this->form_validation->run() == FALSE) {
             $data = [
                'judul' => 'Sejarah',
                'title' => 'Sejarah - Masjid Nurul Ilmi',
                'menu'  => 'sejarah',
                'data_sejarah' => $this->sejarah->getDataSejarah()
            ];
		    $this->template->load('v_template_admin', 'admin/sejarah/v_tambah', $data);
        } else {
            // File Upload Configuration
            $config['upload_path']          = './upload/sejarah/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
            $config['max_size']             = 10048; // 10MB
            $config['encrypt_name']         = False;
            
            $this->load->library('upload', $config);
            // $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar')) {
                $error =$this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('admin/sejarah/tambah');
            } else {
                $save = [
                    'judul' => $this->input->post('judul'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'user'   => $this->session->userdata('nama'),
                    'gambar' => $this->upload->data('file_name')
                ];
                $this->sejarah->add_sejarah($save);
                $this->session->set_flashdata('success', 'Data Agenda di Simpan');
                redirect('admin/sejarah');
            }
            
        }
    }

    public function edit($id_sejarah) {
        $data = [
            'judul' => 'Sejarah',
            'title' => 'Sejarah - Masjid Nurul Ilmi',
            'sejarah' => $this->sejarah->get_sejarah_edit($id_sejarah),
            'menu'  => 'sejarah',
        ];
        $this->template->load('v_template_admin', 'admin/sejarah/v_edit', $data);
    }

    public function update($id_sejarah) {
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required',
            ['required' => 'Judul Wajib diisi']
        );

        if ($this->form_validation->run()) {
           $old_filename = $this->input->post('old_gambar');
           $new_filename = $_FILES['gambar']['name'];

           if ($new_filename == TRUE) 
           {
                $update_filename = str_replace(' ', '-', $_FILES['gambar']['name']);
                $config['upload_path']          = './upload/sejarah/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
                // $config['max_size']             = 10048; // 10MB
                $config['file_name']            = $update_filename;
                $config['encrypt_name']         = False;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    if (file_exists("./upload/sejarah/".$old_filename)) {
                        unlink("./upload/sejarah/".$old_filename);
                    }
                }
           }else{
                $update_filename = $old_filename;
           }
           
           $data = array(
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'user'   => $this->session->userdata('nama'),
                'gambar' => $update_filename
            );
                $this->sejarah->update_sejarah($id_sejarah, $data);
                $this->session->set_flashdata('update', 'Data Sejarah Berhasil di Update');
                redirect('admin/sejarah');
        }else{
            return $this->edit($id_sejarah);
        }
    }
}