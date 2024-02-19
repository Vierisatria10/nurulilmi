<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pimpinan extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
          }
		$this->load->model('Pimpinan_model', 'pimpinan');
	}

	public function index()
	{
        $data = [
            'judul' => 'Pimpinan',
            'title' => 'Pimpinan - Masjid Nurul Ilmi',
            'menu'  => 'pimpinan',
            'data_pimpinan' => $this->pimpinan->getDataPimpinan()
        ];
		$this->template->load('v_template_admin', 'pengurus/pimpinan/v_pimpinan', $data);
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
                'judul' => 'Pimpinan',
                'title' => 'Pimpinan - Masjid Nurul Ilmi',
                'menu'  => 'pimpinan',
            ];
		    $this->template->load('v_template_admin', 'pengurus/pimpinan/v_tambah', $data);
        } else {
            // File Upload Configuration
            $config['upload_path']          = './upload/pimpinan/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
            $config['max_size']             = 10048; // 10MB
            $config['encrypt_name']         = False;
            
            $this->load->library('upload', $config);
            // $this->upload->initialize($config);

            // if (!$this->upload->do_upload('foto')) {
            //     $error =$this->upload->display_errors();
            //     $this->session->set_flashdata('error', $error);
            //     redirect('admin/pimpinan/tambah');
            // } else {
                $save = [
                    'nama' => $this->input->post('nama'),
                    'jabatan' => $this->input->post('jabatan'),
                    'link1' => $this->input->post('link1'),
                    'link2' => $this->input->post('link2'),
                    'link3' => $this->input->post('link3'),
                    'foto' => $this->upload->data('file_name')
                ];
                $this->pimpinan->add_pimpinan($save);
                $this->session->set_flashdata('success', 'Data Pimpinan Berhasil di Simpan');
                redirect('pengurus/pimpinan');
            // }
            
        }
    }

    public function edit($id_pimpinan) {
        $data = [
            'judul' => 'Edit Pimpinan',
            'title' => 'Pimpinan - Masjid Nurul Ilmi',
            'pimpinan' => $this->pimpinan->get_pimpinan_detail($id_pimpinan),
            'menu'  => 'pimpinan',
        ];
        $this->template->load('v_template_admin', 'pengurus/pimpinan/v_edit', $data);
    }

    public function update($id_pimpinan)
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
                $config['upload_path']          = './upload/pimpinan/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
                // $config['max_size']             = 10048; // 10MB
                $config['file_name']            = $update_filename;
                $config['encrypt_name']         = False;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    if (file_exists("./upload/pimpinan/".$old_filename)) {
                        unlink("./upload/pimpinan/".$old_filename);
                    }
                }
           }else{
                $update_filename = $old_filename;
           }
           
           $data = array(
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'link1' => $this->input->post('link1'),
                'link2' => $this->input->post('link2'),
                'link3' => $this->input->post('link3'),
                'foto' => $update_filename
            );
                $this->pimpinan->update_pimpinan($id_pimpinan, $data);
                $this->session->set_flashdata('update', 'Data Pimpinan Berhasil di Update');
                redirect('pengurus/pimpinan');
        }else{
            return $this->edit($id_pimpinan);
        }
    }

    public function delete($id_pimpinan)
    {
        $id_pimpinan = $this->input->post('id_pimpinan');
        // $imam = new Imam_model;
        if ($this->pimpinan->checkPimpinanImage($id_pimpinan)) {
            $data = $this->pimpinan->checkPimpinanImage($id_pimpinan);
            if (file_exists("./upload/pimpinan/".$data->foto)) {
                unlink("./upload/pimpinan/".$data->foto);
            }
            $del = [
                'id_pimpinan' => $id_pimpinan
            ];
            $this->pimpinan->deletePimpinan($id_pimpinan, $del);
            $this->session->set_flashdata('success', 'Data Pimpinan Berhasil di Hapus');
            redirect('pengurus/pimpinan');
        }
    }
}