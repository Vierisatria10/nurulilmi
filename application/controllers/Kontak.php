<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		// $this->load->model('Pimpinan_model', 'pimpinan');
		$this->load->model('Setting_model', 'setting');
        $this->load->model('Kontak_model', 'kontak');
	}

	public function index()
	{
        $data = [
            'judul' => 'Kontak',
            'title' => 'Kontak - Masjid Nurul Ilmi',
            'menu'  => 'kontak',
            // 'data_pimpinan' => $this->pimpinan->getDataPimpinan(),
			'data_setting' => $this->setting->getDataSetting()

        ];
		$this->load->view('webpage/v_kontak', $data);
	}

    public function kirim_pesan()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required',
            ['required' => 'Field %s Wajib diisi!!']
        );
        $this->form_validation->set_rules('no_hp', 'No Hp', 'trim|required',
            ['required' => 'Field %s Wajib diisi!!']
        );
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required',
            ['required' => 'Field %s Wajib diisi!!']
        );
        $this->form_validation->set_rules('pesan', 'Pesan', 'trim|required',
            ['required' => 'Field %s Wajib diisi!!']
        );
        
        if ($this->form_validation->run() == FALSE) {
            $data = [
                'judul' => 'Kontak',
                'title' => 'Kontak - Masjid Nurul Ilmi',
                'menu'  => 'kontak',
                'data_setting' => $this->setting->getDataSetting()

            ];
		    $this->load->view('webpage/v_kontak', $data);
        }else{
            $nama = htmlspecialchars($this->input->post('nama'));
            $no_hp = htmlspecialchars($this->input->post('no_hp'));
            $subject = htmlspecialchars($this->input->post('subject'));
            $pesan = htmlspecialchars($this->input->post('pesan'));

            $data = array(
                'nama' => $nama,
                'no_hp' => $no_hp,
                'subject' => $subject,
                'pesan' => $pesan
            );
            $this->kontak->kirim_pesan($data);
            $this->session->set_flashdata('success', 'Masukan Anda Berhasil Terkirim');
            redirect('kontak');
        }
        

    }
}