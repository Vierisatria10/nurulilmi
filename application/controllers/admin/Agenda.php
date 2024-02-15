<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
          }
        $this->load->model('Agenda_model', 'agenda');
    }
	public function index()
	{
        $data = [
            'judul' => 'Agenda',
            'title' => 'Agenda - Masjid Nurul Ilmi',
            'menu'  => 'agenda',
            'data_agenda' => $this->agenda->getDataAgenda()
        ];
		$this->template->load('v_template_admin', 'admin/agenda/v_agenda', $data);
	}

    public function tambah()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required',
            ['required' => 'Judul Wajib diisi']
        );
        $this->form_validation->set_rules('jam_awal', 'Jam Awal', 'trim|required',
            ['required' => 'Jam Awal Wajib diisi']
        );
        $this->form_validation->set_rules('jam_akhir', 'Jam Akhir', 'trim|required',
            ['required' => 'Jam Akhir Wajib diisi']
        );
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required',
            ['required' => 'Lokasi Wajib diisi']
        );  
        if ($this->form_validation->run() == FALSE) {
             $data = [
                'judul' => 'Agenda',
                'title' => 'Agenda - Masjid Nurul Ilmi',
                'menu'  => 'agenda',
                'data_agenda' => $this->agenda->getDataAgenda()
            ];
		    $this->template->load('v_template_admin', 'admin/agenda/v_tambah', $data);
        } else {
            // File Upload Configuration
            $config['upload_path']          = './upload/agenda/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
            $config['max_size']             = 10048; // 10MB
            $config['encrypt_name']         = False;
            
            $this->load->library('upload', $config);
            // $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar')) {
                $error =$this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('admin/agenda/tambah');
            } else {
                $save = [
                    'judul' => $this->input->post('judul'),
                    'tgl_awal' => $this->input->post('tgl_awal'),
                    'tgl_akhir' => $this->input->post('tgl_akhir'),
                    'jam_awal' => $this->input->post('jam_awal'),
                    'jam_akhir' => $this->input->post('jam_akhir'),
                    'lokasi' => $this->input->post('lokasi'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'user'   => $this->session->userdata('nama'),
                    'gambar' => $this->upload->data('file_name')
                ];
                $this->agenda->add_agenda($save);
                $this->session->set_flashdata('success', 'Data Agenda di Simpan');
                redirect('admin/agenda');
            }
            
        }
    }

    public function edit($id_agenda) {
        $data = [
            'judul' => 'Agenda',
            'title' => 'Agenda - Masjid Nurul Ilmi',
            'agenda' => $this->agenda->get_agenda_detail($id_agenda),
            'menu'  => 'agenda',
        ];
        $this->template->load('v_template_admin', 'admin/agenda/v_edit', $data);
    }

    public function update($id_agenda)
    {
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required',
            ['required' => 'Judul Wajib diisi']
        );
        $this->form_validation->set_rules('jam_awal', 'Jam Awal', 'trim|required',
            ['required' => 'Jam Awal Wajib diisi']
        );
        $this->form_validation->set_rules('jam_akhir', 'Jam Akhir', 'trim|required',
            ['required' => 'Jam Akhir Wajib diisi']
        );
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required',
            ['required' => 'Lokasi Wajib diisi']
        );  
        if ($this->form_validation->run()) {
           $old_filename = $this->input->post('old_gambar');
           $new_filename = $_FILES['gambar']['name'];

           if ($new_filename == TRUE) 
           {
                $update_filename = str_replace(' ', '-', $_FILES['gambar']['name']);
                $config['upload_path']          = './upload/agenda/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
                // $config['max_size']             = 10048; // 10MB
                $config['file_name']            = $update_filename;
                $config['encrypt_name']         = False;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    if (file_exists("./upload/agenda/".$old_filename)) {
                        unlink("./upload/agenda/".$old_filename);
                    }
                }
           }else{
                $update_filename = $old_filename;
           }
           
           $data = array(
                'judul' => $this->input->post('judul'),
                'tgl_awal' => $this->input->post('tgl_awal'),
                'tgl_akhir' => $this->input->post('tgl_akhir'),
                'jam_awal' => $this->input->post('jam_awal'),
                'jam_akhir' => $this->input->post('jam_akhir'),
                'lokasi' => $this->input->post('lokasi'),
                'deskripsi' => $this->input->post('deskripsi'),
                'user'   => $this->session->userdata('nama'),
                'gambar' => $update_filename
            );
                $this->agenda->update_agenda($id_agenda, $data);
                $this->session->set_flashdata('update', 'Data Agenda Berhasil di Update');
                redirect('admin/agenda');
        }else{
            return $this->edit($id_agenda);
        }
    }

    public function detail($id_agenda) {
        $data = [
            'judul' => 'Detail Agenda',
            'title' => 'Detail Agenda - Masjid Nurul Ilmi',
            'agenda' => $this->agenda->get_agenda_detail($id_agenda),
            'menu'  => 'agenda',
        ];
        $this->template->load('v_template_admin', 'admin/agenda/v_detail', $data);
    }

    public function change_status($id_agenda, $status) {
        $this->agenda->updateStatus($id_agenda, $status);
        $this->session->set_flashdata('success', 'Agenda Berhasil di Publish');
        redirect('admin/agenda');
    }

    public function delete($id_agenda)
    {
        $id_agenda = $this->input->post('id_agenda');
        // $imam = new Imam_model;
        if ($this->agenda->checkAgendaImage($id_agenda)) {
            $data = $this->agenda->checkAgendaImage($id_agenda);
            if (file_exists("./upload/agenda/".$data->gambar)) {
                unlink("./upload/agenda/".$data->gambar);
            }
            $del = [
                'id_agenda' => $id_agenda
            ];
            $this->agenda->deleteAgenda($id_agenda, $del);
            $this->session->set_flashdata('success', 'Data Imam & Muadzin Berhasil di Hapus');
            redirect('admin/agenda');
        }
    }

}