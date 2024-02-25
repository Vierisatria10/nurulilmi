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