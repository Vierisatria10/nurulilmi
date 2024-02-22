<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
          }
        $this->load->model('Video_model', 'video');
        $this->load->model('User_model', 'user');

    }

    public function index()
	{
        $data = [
            'judul' => 'Video',
            'title' => 'Video - Masjid Nurul Ilmi',
            'menu'  => 'video',
            'data_kategori' => $this->video->getDataKategori(),
            'data_video' => $this->video->getDataVideo()
        ];
		$this->template->load('v_template_admin', 'admin/video/v_video', $data);
	}

    public function tambah_video()
    {
        $judul        = $this->input->post('judul');
        $link         = $this->input->post('link');
        $id_kat_video = $this->input->post('id_kat_video');

        $data = [
            'judul' => $judul,
            'link' => $link,
            'id_kat_video' => $id_kat_video
        ];
        
        if ($this->video->insert_video($data)) {
            $this->session->set_flashdata('success', 'Data Video Berhasil di Tambahkan');
            redirect('admin/video');
        }else{
            $this->session->set_flashdata('error', 'Data Video Gagal di Tambahkan');
            redirect('admin/video');
        }
    }


	public function kategori()
	{
        $data = [
            'judul' => 'Kategori Video',
            'title' => 'Kategori Video - Masjid Nurul Ilmi',
            'menu'  => 'kategori',
            'data_kategori' => $this->video->getDataKategori()
        ];
		$this->template->load('v_template_admin', 'admin/video/v_kategori', $data);
	}

    public function tambah_kategori()
    {
        $nama_video = $this->input->post('nama_video');
        $slug = $this->input->post('slug');


        $data = [
            'nama_video' => $nama_video,
            'slug' => $slug
        ];
        
        if ($this->video->insert_kategori($data)) {
            $this->session->set_flashdata('success', 'Data Kategori Video Berhasil di Tambahkan');
            redirect('admin/video/kategori');
        }else{
            $this->session->set_flashdata('error', 'Data Kategori Video Gagal di Tambahkan');
            redirect('admin/video/kategori');
        }
    }

    public function edit_kategori()
    {
        $id_kat_video = $this->input->post('id_kat_video');
        $nama_video = $this->input->post('nama_video');

        $data = [
            'nama_video' => $nama_video
        ];
        $this->video->update_kategori($id_kat_video, $data);
        $this->session->set_flashdata('success', 'Data Kategori Video Berhasil di Ubah');
        redirect('admin/video/kategori');
    }

    public function delete_kategori()
    {
        $id_del = $this->input->post('id_del');
        $this->video->delete_kategori($id_del);
        $this->session->set_flashdata('success', 'Data Kategori Video Berhasil di Hapus');
        redirect('admin/video/kategori');
    }
}