<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pimpinan extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
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
		$this->template->load('v_template_admin', 'admin/pimpinan/v_pimpinan', $data);
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
                'menu'  => 'tambahpimpinan',
            ];
		    $this->template->load('v_template_admin', 'admin/pimpinan/v_tambah', $data);
        } else {
            // File Upload Configuration
            $config['upload_path']          = './upload/pimpinan/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
            $config['max_size']             = 10048; // 10MB
            $config['encrypt_name']         = False;
            
            $this->load->library('upload', $config);
            // $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto')) {
                $error =$this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('admin/pimpinan/tambah');
            } else {
                $save = [
                    'nama' => $this->input->post('nama'),
                    'jabatan' => $this->input->post('jabatan'),
                    'foto' => $this->upload->data('file_name')
                ];
                $this->pimpinan->add_pimpinan($save);
                $this->session->set_flashdata('success', 'Data Pimpinan Berhasil di Simpan');
                redirect('admin/pimpinan');
            }
            
        }
    }

    public function edit($id_pimpinan) {
        $data = [
            'judul' => 'Edit Pimpinan',
            'title' => 'Pimpinan - Masjid Nurul Ilmi',
            'pimpinan' => $this->pimpinan->get_pimpinan_detail($id_pimpinan),
            'menu'  => 'editpimpinan',
        ];
        $this->template->load('v_template_admin', 'admin/pimpinan/v_edit', $data);
    }

    public function update($id_pimpinan)
    {
        $config['upload_path']          = './upload/pimpinan/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
        $config['max_size']             = 10048; // 10MB
        $config['encrypt_name']         = False;

        // $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
            redirect('admin/pimpinan/edit/'.$id_pimpinan);
        } else {
            $pimpinan = $this->pimpinan->get_pimpinan($id_pimpinan);
            $old_image_path = './upload/pimpinan/'.$pimpinan['foto'];
            if(file_exists($old_image_path)) {
                unlink($old_image_path); // Delete old image
            }

            $data = array(
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'foto' => $this->upload->data('file_name')
            );
            $this->pimpinan->update_pimpinan($id_pimpinan, $data);
            $this->session->set_flashdata('update', 'Data Pimpinan Berhasil di Update');
            redirect('admin/pimpinan');
        }
    }

    public function delete()
    {
        $id_del = $this->input->post('id_del');
        $pimpinan = $this->pimpinan->get_pimpinan($id_del);
        $image_path = './upload/pimpinan/'.$pimpinan['foto'];
        if(file_exists($image_path)) {
            unlink($image_path); // Delete image
            $data = array('foto' => NULL);
            $this->pimpinan->delete_pimpinan($id_del, $data); // Update database to remove image reference
            $this->session->set_flashdata('success', 'Data Pimpinan Berhasil di Hapus');
            redirect('admin/pimpinan');
        } else {
            // Image not found
            redirect('admin/pimpinan/edit/'.$id_del);
        }
    }
}