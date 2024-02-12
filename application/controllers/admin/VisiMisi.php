<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VisiMisi extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('VisiMisi_model', 'visi');
	}

	public function index()
	{
        $data = [
            'judul' => 'Visi Misi',
            'title' => 'Visi & Misi - Masjid Nurul Ilmi',
            'menu'  => 'visimisi',
            'data_visi' => $this->visi->getDataVisi()
        ];
		$this->template->load('v_template_admin', 'admin/visi/v_visi', $data);
	}

    public function tambah()
    {
        $this->form_validation->set_rules('visi', 'Visi', 'trim|required');
        $this->form_validation->set_rules('misi', 'Misi', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
             $data = [
                'judul' => 'Visi Misi',
                'title' => 'Visi & Misi - Masjid Nurul Ilmi',
                'menu'  => 'tambahvisi',
            ];
		    $this->template->load('v_template_admin', 'admin/visi/v_tambah', $data);
        } else {
            $visi = $this->input->post('visi');
            $misi = $this->input->post('misi');
            $save = [
                'visi' => $visi,
                'misi' => $misi
            ];
            $this->visi->add_visi($save);
            $this->session->set_flashdata('success', 'Visi Misi Berhasil di Simpan');
            redirect('admin/visimisi');
        }
    }

    public function edit($id_visi) {
        $data = [
            'judul' => 'Edit Visi Misi',
            'title' => 'Visi & Misi - Masjid Nurul Ilmi',
            'visi'  =>  $this->visi->get_visi_detail($id_visi),
            'menu'  => 'editvisi',
        ];
        $this->template->load('v_template_admin', 'admin/visi/v_edit', $data);
    }

    public function update($id_visi)
    {
        $this->form_validation->set_rules('visi', 'Visi', 'trim|required');
        $this->form_validation->set_rules('misi', 'Misi', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data = [
                'judul' => 'Edit Visi Misi',
                'title' => 'Visi & Misi - Masjid Nurul Ilmi',
                'visi'  =>  $this->visi->get_visi_detail($id_visi),
                'menu'  => 'editvisi',
            ];
		    $this->template->load('v_template_admin', 'admin/visi/v_edit', $data);
        } else {
            $visi = $this->input->post('visi');
            $misi = $this->input->post('misi');
            $data = [
                'visi' => $visi,
                'misi' => $misi
            ];
            $this->visi->update_Visi($id_visi, $data);
            $this->session->set_flashdata('update', 'Visi Misi Berhasil di Update');
            redirect('admin/visimisi');
        }
    }

    public function delete()
    {
        $id_del = $this->input->post('id_del');
        $data = [
            'id_visi' => $id_del
        ];
        $this->visi->delete_visi($id_del, $data);
        $this->session->set_flashdata('success', 'Data Visi Misi berhasil dihapus');
        redirect('admin/visimisi');
    }
}