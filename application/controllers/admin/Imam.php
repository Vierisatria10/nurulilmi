<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imam extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
          }
		$this->load->model('Imam_model', 'imam');
        $this->load->model('Download_model', 'download');
	}

	public function index()
	{
        $data = [
            'judul' => 'Imam & Muadzin',
            'title' => 'Imam & Muadzin - Masjid Nurul Ilmi',
            'menu'  => 'imam',
            'total_download' => $this->download->count_download(),
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
                'total_download' => $this->download->count_download(),
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

            // if (!$this->upload->do_upload('foto')) {
            //     $error =$this->upload->display_errors();
            //     $this->session->set_flashdata('error', $error);
            //     redirect('admin/imam/tambah');
            // } else {
                $save = [
                    'nama' => $this->input->post('nama'),
                    'jabatan' => $this->input->post('jabatan'),
                    'alamat'  => $this->input->post('alamat'),
                    'link1' => $this->input->post('link1'),
                    'link2' => $this->input->post('link2'),
                    'link3' => $this->input->post('link3'),
                    'foto' => $this->upload->data('file_name')
                ];
                $this->imam->add_imam($save);
                $this->session->set_flashdata('success', 'Data Imam & Muadzin Berhasil di Simpan');
                redirect('admin/imam');
            // }
            
        }
    }

    public function edit($id_imam) {
        $data = [
            'judul' => 'Edit Imam & Muadzin',
            'title' => 'Imam & Muadzin - Masjid Nurul Ilmi',
            'total_download' => $this->download->count_download(),
            'imam' => $this->imam->get_imam_detail($id_imam),
            'menu'  => 'editimam',
        ];
        $this->template->load('v_template_admin', 'admin/imam/v_edit', $data);
    }

    public function update($id_imam)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required',
            ['required' => 'Nama Wajib diisi']
        );
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required',
            ['required' => 'Jabatan Wajib diisi']
        );
        if ($this->form_validation->run()) {
           $old_filename = $this->input->post('old_foto');
           $new_filename = $_FILES['foto']['name'];

           if ($new_filename == TRUE) 
           {
                $update_filename = str_replace(' ', '-', $_FILES['foto']['name']);
                $config['upload_path']          = './upload/imam/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
                // $config['max_size']             = 10048; // 10MB
                $config['file_name']            = $update_filename;
                $config['encrypt_name']         = False;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    if (file_exists("./upload/imam/".$old_filename)) {
                        unlink("./upload/imam/".$old_filename);
                    }
                }
           }else{
                $update_filename = $old_filename;
           }
           
           $data = array(
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'alamat' => $this->input->post('alamat'),
                'link1' => $this->input->post('link1'),
                'link2' => $this->input->post('link2'),
                'link3' => $this->input->post('link3'),
                'foto' => $update_filename
            );
                $this->imam->update_imam($id_imam, $data);
                $this->session->set_flashdata('update', 'Data Imam & Muadzin Berhasil di Update');
                redirect('admin/imam');
        }else{
            return $this->edit($id_imam);
        }
    }

    public function delete($id_imam)
    {
        $id_imam = $this->input->post('id_imam');
        // $imam = new Imam_model;
        if ($this->imam->checkImamImage($id_imam)) {
            $data = $this->imam->checkImamImage($id_imam);
            if (file_exists("./upload/imam/".$data->foto)) {
                unlink("./upload/imam/".$data->foto);
            }
            $del = [
                'id_imam' => $id_imam
            ];
            $this->imam->deleteImam($id_imam, $del);
            $this->session->set_flashdata('success', 'Data Imam & Muadzin Berhasil di Hapus');
            redirect('admin/imam');
        }
    }
}