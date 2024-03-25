<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
          }
		$this->load->model('Setting_model', 'setting');
        $this->load->model('Jadwal_model', 'jadwal');
        $this->load->model('Download_model', 'download');
	}

    public function index()
	{
       
        $data = [
            'judul' => 'Setting Web',
            'title' => 'Setting Web - Masjid Nurul Ilmi',
            'menu'  => 'setting',
            'total_download' => $this->download->count_download(),
            'data_setting' => $this->setting->getDataSetting(),
        ];
		$this->template->load('v_template_admin', 'admin/setting/v_setting', $data);
	}

     public function tambah()
    {
        $this->form_validation->set_rules('nama_masjid', 'Nama Masjid', 'trim|required',
            ['required' => 'Nama Wajib diisi']
        );
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required',
            ['required' => 'Alamat Wajib diisi']
        );
        $this->form_validation->set_rules('no_hp', 'NO Hp', 'trim|required',
            ['required' => 'No Hp Wajib diisi']
        );
        $this->form_validation->set_rules('judul1', 'Judul 1', 'trim|required',
            ['required' => 'Judul 1 Wajib diisi']
        );
        if ($this->form_validation->run() == FALSE) {
             $url_kota = "https://api.myquran.com/v2/sholat/kota/semua";
            $kota = json_decode(file_get_contents($url_kota), true);
             $data = [
                'judul' => 'Setting Web',
                'title' => 'Setting Web - Masjid Nurul Ilmi',
                'kota'  => $kota,
                'total_download' => $this->download->count_download(),
                'data_jadwal' => $this->jadwal->getDataJadwal(),
                'menu'  => 'setting',
            ];
		    $this->template->load('v_template_admin', 'admin/setting/v_tambah', $data);
        } else {
            // File Upload Configuration            
            $this->load->library('upload');
             $dataInfo = array();
            $files = $_FILES;
            $cpt = count($_FILES['userfile']['name']);
            for ($i=0; $i < $cpt; $i++) 
            { 
                $_FILES['userfile']['name']= $files['userfile']['name'][$i];
                $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                $_FILES['userfile']['size']= $files['userfile']['size'][$i];
                
                 $this->upload->initialize($this->set_upload_options());
                 $this->upload->do_upload('userfile');
                 $dataInfo[] = $this->upload->data();
            }
                $save = [
                    'nama_masjid' => $this->input->post('nama_masjid'),
                    'alamat' => $this->input->post('alamat'),
                    'no_hp' => $this->input->post('no_hp'),
                    'judul1' => $this->input->post('judul1'),
                    'judul2' => $this->input->post('judul2'),
                    'id_jadwal' => $this->input->post('id_jadwal'),
                    'judul3' => $this->input->post('judul3'),
                    'logo' => $dataInfo[0]['file_name'],
                    'banner1' => $dataInfo[1]['file_name'],
                    'banner2' => $dataInfo[2]['file_name'],
                    'banner3' => $dataInfo[3]['file_name'],
                    'sosmed1' => $this->input->post('sosmed1'),
                    'sosmed2' => $this->input->post('sosmed2'),
                    'sosmed3' => $this->input->post('sosmed3'),
                    'ayat_quran' => $this->input->post('ayat_quran'),
                    'artinya'    => $this->input->post('artinya'),
                    'surah'      => $this->input->post('surah')
                ];
                $this->setting->add_setting($save);
                $this->session->set_flashdata('success', 'Data Setting Web Berhasil di Simpan');
                redirect('admin/setting');
            // }
            
        }
    }

    private function set_upload_options()
    {   
        //upload an image options
        $config = array();
        $config['upload_path'] = './upload/setting/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
        $config['max_size']      = '0';
        $config['overwrite']     = FALSE;

        return $config;
    }

    public function edit($id_setting) {
        $data = [
            'judul' => 'Edit Setting Web',
            'title' => 'Setting Web - Masjid Nurul Ilmi',
            'total_download' => $this->download->count_download(),
            'setting' => $this->setting->get_setting_detail($id_setting),
            'data_jadwal' => $this->jadwal->getDataJadwal(),
            'menu'  => 'setting',
        ];
        $this->template->load('v_template_admin', 'admin/setting/v_edit', $data);
    }

    public function update()
    {
        // Ambil data dari form
        $data = array(
            'nama_masjid' => $this->input->post('nama_masjid'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'id_jadwal' => $this->input->post('id_jadwal'),
            'judul1' => $this->input->post('judul1'),
            'judul2' => $this->input->post('judul2'),
            'judul3' => $this->input->post('judul3'),
            'sosmed1' => $this->input->post('sosmed1'),
            'sosmed2' => $this->input->post('sosmed2'),
            'sosmed3' => $this->input->post('sosmed3'),
            'ayat_quran' => $this->input->post('ayat_quran'),
            'artinya'    => $this->input->post('artinya'),
            'surah'      => $this->input->post('surah')
        );
          // Update data di tabel tbl_setting
        $id_setting = $this->input->post('id_setting');
        $this->setting->update_setting($id_setting, $data);
    
        // Upload file dan simpan nama file ke database
        $this->setting->upload_files($id_setting);
        $this->session->set_flashdata('success', 'Data Setting Web Berhasil di Update');
        redirect('admin/setting');
    }

    public function delete($id_setting)
    {
        $id_setting = $this->input->post('id_setting');
        // $imam = new Imam_model;
        if ($this->setting->checkSettingImage($id_setting)) {
            $data = $this->setting->checkSettingImage($id_setting);
            if (file_exists("./upload/setting/".$data->logo)) {
                unlink("./upload/setting/".$data->logo);
            }
            if (file_exists("./upload/setting/".$data->banner1)) {
                unlink("./upload/setting/".$data->banner1);
            }
            if (file_exists("./upload/setting/".$data->banner2)) {
                unlink("./upload/setting/".$data->banner2);
            }
            if (file_exists("./upload/setting/".$data->banner3)) {
                unlink("./upload/setting/".$data->banner3);
            }
            $del = [
                'id_setting' => $id_setting
            ];
            $this->setting->deleteSetting($id_setting, $del);
            $this->session->set_flashdata('success', 'Data Setting Web Berhasil di Hapus');
            redirect('admin/setting');
        }
    }
}