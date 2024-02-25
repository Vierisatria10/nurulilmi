<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
          }
        $this->load->model('Artikel_model', 'artikel');
        $this->load->model('User_model', 'user');

    }

    public function index()
	{
        $data = [
            'judul' => 'Artikel',
            'title' => 'Artikel - Masjid Nurul Ilmi',
            'menu'  => 'artikel',
            'data_artikel' => $this->artikel->getDataArtikel()
        ];
		$this->template->load('v_template_admin', 'admin/artikel/v_artikel', $data);
	}

    public function tambah_artikel()
    {
        $data = [
            'judul' => 'Artikel',
            'title' => 'Artikel - Masjid Nurul Ilmi',
            'menu'  => 'artikel',
            'data_kategori' => $this->artikel->getDataKategori()
        ];
		$this->template->load('v_template_admin', 'admin/artikel/v_tambah', $data);
    }

    public function simpan_artikel()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required',
            ['required' => '%s Wajib diisi']
        );
        $this->form_validation->set_rules('id_kategori', 'Nama Kategori', 'trim|required',
            ['required' => '%s Wajib diisi']
        );
        $this->form_validation->set_rules('slug', 'Slug', 'trim|required',
            ['required' => '%s Wajib diisi']
        );
        $this->form_validation->set_rules('tanggal_dibuat', 'Tanggal Dibuat', 'trim|required',
            ['required' => '%s Wajib diisi']
        );
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required',
            ['required' => '%s Wajib diisi']
        );

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'judul' => 'Artikel',
                'title' => 'Artikel - Masjid Nurul Ilmi',
                'menu'  => 'artikel',
                'data_kategori' => $this->artikel->getDataKategori()
            ];
		    $this->template->load('v_template_admin', 'admin/artikel/v_tambah', $data);
        }else{
            // File Upload Configuration
            $config['upload_path']          = './upload/artikel/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
            $config['max_size']             = 10048; // 10MB
            $config['encrypt_name']         = False;
            
            $this->load->library('upload', $config);
            // $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar')) {
                $error =$this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('admin/artikel/tambah_artikel');
            } else {
                $save = [
                    'judul' => $this->input->post('judul'),
                    'id_kategori' => $this->input->post('id_kategori'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'tanggal_dibuat' => $this->input->post('tanggal_dibuat'),
                    'user'   => $this->session->userdata('nama'),
                    'slug'   => $this->input->post('slug'),
                    'gambar' => $this->upload->data('file_name')
                ];
                $this->artikel->insert_artikel($save);
                $this->session->set_flashdata('success', 'Data Artikel Berhasil di Tambahkan!!');
                redirect('admin/artikel');
            }
        }
    }

    public function kategori()
	{
        $data = [
            'judul' => 'Kategori Artikel',
            'title' => 'Kategori Artikel - Masjid Nurul Ilmi',
            'menu'  => 'kategori',
            'data_kategori' => $this->artikel->getDataKategori()
        ];
		$this->template->load('v_template_admin', 'admin/artikel/v_kategori', $data);
	}

    public function tambah_kategori()
    {
        $nama_kategori = $this->input->post('nama_kategori');

        $data = [
            'nama_kategori' => $nama_kategori        
        ];
        
        if ($this->artikel->insert_kategori($data)) {
            $this->session->set_flashdata('success', 'Data Kategori Artikel Berhasil di Tambahkan');
            redirect('admin/artikel/kategori');
        }else{
            $this->session->set_flashdata('error', 'Data Kategori Artikel Gagal di Tambahkan');
            redirect('admin/artikel/kategori');
        }
    }

    public function edit_kategori()
    {
        $id_kategori = $this->input->post('id_kategori');
        $nama_kategori = $this->input->post('nama_kategori');

        $data = [
            'nama_kategori' => $nama_kategori
        ];
        $this->artikel->update_kategori($id_kategori, $data);
        $this->session->set_flashdata('success', 'Data Kategori Artikel Berhasil di Ubah');
        redirect('admin/artikel/kategori');
    }

    public function delete_kategori()
    {
        $id_del = $this->input->post('id_del');
        $this->artikel->delete_kategori($id_del);
        $this->session->set_flashdata('success', 'Data Kategori Artikel Berhasil di Hapus');
        redirect('admin/artikel/kategori');
    }
}