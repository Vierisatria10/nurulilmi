<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IbadahDakwah extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
          }
		$this->load->model('Bidang_model', 'bidang');
        $this->load->model('Download_model', 'download');
	}

	public function index()
	{
        $data = [
            'judul' => 'Ibadah & Dakwah',
            'title' => 'Ibadah & Dakwah - Masjid Nurul Ilmi',
            'menu'  => 'ibadahdakwah',
            'total_download' => $this->download->count_download(),
            'data_dakwah' => $this->bidang->getDataDakwah()
        ];
		$this->template->load('v_template_admin', 'admin/bidang/v_dakwah', $data);
	}

    public function simpan_data()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required',
            ['required' => 'Nama Wajib diisi']
        );
       
        if ($this->form_validation->run() == FALSE) {
            $data = [
                'judul' => 'Ibadah & Dakwah',
                'title' => 'Ibadah & Dakwah - Masjid Nurul Ilmi',
                'menu'  => 'ibadahdakwah',
                'total_download' => $this->download->count_download(),
                'data_dakwah' => $this->bidang->getDataDakwah()
            ];
            $this->template->load('v_template_admin', 'admin/bidang/v_dakwah', $data);
        } else {
            $config['upload_path']          = './upload/bidang/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
            // $config['max_size']             = 10048; // 10MB
            $config['encrypt_name']         = False;
            
            $this->load->library('upload', $config);
            // $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto')) {
                $error =$this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('admin/ibadahdakwah');
            } else {
                $save = [
                    'nama' => $this->input->post('nama'),
                    'jabatan' => $this->input->post('jabatan'),
                    'alamat' => $this->input->post('alamat'),
                    'foto' => $this->upload->data('file_name')
                ];
                $result = $this->bidang->add_dakwah($save);
                if ($result) {
                   $this->session->set_flashdata('success', 'Data Ibadah & Dakwah Berhasil di Simpan');
                    redirect('admin/ibadahdakwah');
                }else {
                    $this->session->set_flashdata('error', 'Data Ibadah & Dakwah Gagal di Simpan');
                    redirect('admin/ibadahdakwah');
                }
            }  
        }
    }

    public function update_data($id_dakwah)
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
                $config['upload_path']          = './upload/bidang/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
                // $config['max_size']             = 10048; // 10MB
                $config['file_name']            = $update_filename;
                $config['encrypt_name']         = False;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    if (file_exists("./upload/bidang/".$old_filename)) {
                        unlink("./upload/bidang/".$old_filename);
                    }
                }
           }else{
                $update_filename = $old_filename;
           }
           
           $data = array(
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'alamat' => $this->input->post('alamat'),
                'foto' => $update_filename
            );
                $this->bidang->update_dakwah($id_dakwah, $data);
                $this->session->set_flashdata('update', 'Data Ibadah & Dakwah Berhasil di Update');
                redirect('admin/ibadahdakwah');
        }else{
            echo "Gagal Data Tidak ditemukan";
        }
    }

    public function delete($id_dakwah)
    {
        $id_dakwah = $this->input->post('id_dakwah');
        // $imam = new Imam_model;
        if ($this->bidang->checkDakwahImage($id_dakwah)) {
            $data = $this->bidang->checkDakwahImage($id_dakwah);
            if (file_exists("./upload/bidang/".$data->foto)) {
                unlink("./upload/bidang/".$data->foto);
            }
            $del = [
                'id_dakwah' => $id_dakwah
            ];
            $this->bidang->deleteDakwah($id_dakwah, $del);
            $this->session->set_flashdata('success', 'Data Ibadah & Dakwah Berhasil di Hapus');
            redirect('admin/ibadahdakwah');
        }
    }
}