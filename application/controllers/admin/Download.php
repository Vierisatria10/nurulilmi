<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
          }
		$this->load->model('Download_model', 'download');
	}

	public function index()
	{
        $data = [
            'judul' => 'File Download',
            'title' => 'Download - Masjid Nurul Ilmi',
            'menu'  => 'download',
            'total_download' => $this->download->count_download(),
            'data_download' => $this->download->getDataDownload()
        ];
		$this->template->load('v_template_admin', 'admin/download/v_download', $data);
	}

    public function simpan_download()
    {
        $this->form_validation->set_rules('nama_file', 'Nama File', 'trim|required',
            ['required' => 'Field %s wajib diisi']
        );

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'judul' => 'File Download',
                'title' => 'Download - Masjid Nurul Ilmi',
                'menu'  => 'download',
                'data_download' => $this->download->getDataDownload()
            ];
		    $this->template->load('v_template_admin', 'admin/download/v_download', $data);
        } else {
            // File Upload Configuration
            $config['upload_path']          = './upload/download/';
            $config['allowed_types']        = 'pdf|xlsx|xls|docx|pptx|doc';
            $config['max_size']             = 10048; // 10MB
            $config['encrypt_name']         = False;
            
            $this->load->library('upload', $config);
            // $this->upload->initialize($config);

            if (!$this->upload->do_upload('file')) {
                $error =$this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('admin/download');
            } else {
                $save = [
                    'nama_file' => $this->input->post('nama_file'),
                    'tgl_dibuat' => date('Y-m-d H:i:s'),
                    'file' => $this->upload->data('file_name')
                ];
                $this->download->add_download($save);
                $this->session->set_flashdata('success', 'Data File Download Berhasil di Simpan');
                redirect('admin/download');
            }
            
        }
    }

    public function update_download($id_download) 
    {
        if ($this->form_validation->run()) {
           $old_filename = $this->input->post('file_old');
           $new_filename = $_FILES['file']['name'];

           if ($new_filename == TRUE) 
           {
                $update_filename = str_replace(' ', '-', $_FILES['file']['name']);
                $config['upload_path']          = './upload/download/';
                $config['allowed_types']        = 'pdf|xlsx|xlx|docx|doc|pptx';
                // $config['max_size']             = 10048; // 10MB
                $config['file_name']            = $update_filename;
                $config['encrypt_name']         = False;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file')) {
                    if (file_exists("./upload/download/".$old_filename)) {
                        unlink("./upload/download/".$old_filename);
                    }
                }
           }else{
                $update_filename = $old_filename;
           }
           
           $data = array(
                'nama_file' => $this->input->post('nama_file'),
                'file' => $update_filename
            );
                $this->download->update_download($id_download, $data);
                $this->session->set_flashdata('update', 'Data File Download Berhasil di Update');
                redirect('admin/download');
        }else{
            echo 'Gagal Upload file';
        }
    }
}