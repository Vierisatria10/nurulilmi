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
	}

    public function index()
	{
        $data = [
            'judul' => 'Setting Web',
            'title' => 'Setting Web - Masjid Nurul Ilmi',
            'menu'  => 'setting',
            'data_setting' => $this->setting->getDataSetting()
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
             $data = [
                'judul' => 'Setting Web',
                'title' => 'Setting Web - Masjid Nurul Ilmi',
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
            // $this->upload->initialize($config);

            // if (!$this->upload->do_upload('logo') || !$this->upload->do_upload('banner1') || !$this->upload->do_upload('banner2')
            // || !$this->upload->do_upload('banner3')) {
            //     $error =$this->upload->display_errors();
            //     $this->session->set_flashdata('error', $error);
            //     redirect('admin/setting/tambah');
            // } else {
            //     $logo_data = $this->upload->data();
            //     $logo_path = $logo_data['file_name'];

            //     $banner1_data = $this->upload->data();
            //     $banner1_path = 'upload/setting/'.$banner1_data['file_name'];

            //     $banner2_data = $this->upload->data();
            //     $banner2_path = 'upload/setting/'.$banner2_data['file_name'];

            //     $banner3_data = $this->upload->data();
            //     $banner3_path = 'upload/setting/'.$banner3_data['file_name'];

                $save = [
                    'nama_masjid' => $this->input->post('nama_masjid'),
                    'alamat' => $this->input->post('alamat'),
                    'no_hp' => $this->input->post('no_hp'),
                    'judul1' => $this->input->post('judul1'),
                    'judul2' => $this->input->post('judul2'),
                    'judul3' => $this->input->post('judul3'),
                    'logo' => $dataInfo[0]['file_name'],
                    'banner1' => $dataInfo[1]['file_name'],
                    'banner2' => $dataInfo[2]['file_name'],
                    'banner3' => $dataInfo[3]['file_name'],
                    'sosmed1' => $this->input->post('sosmed1'),
                    'sosmed2' => $this->input->post('sosmed2'),
                    'sosmed3' => $this->input->post('sosmed3'),

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
            'setting' => $this->setting->get_setting_detail($id_setting),
            'menu'  => 'setting',
        ];
        $this->template->load('v_template_admin', 'admin/setting/v_edit', $data);
    }

     public function update($id_setting)
    {
        // $this->form_validation->set_rules('nama', 'Nama', 'trim|required',
        //     ['required' => 'Nama Wajib diisi']
        // );
        // $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required',
        //     ['required' => 'Jabatan Wajib diisi']
        // );
        if ($this->form_validation->run()) {
            // Logo
           $old_filename = $this->input->post('old_logo');
           $new_filename = $_FILES['logo']['name'];

            // Banner 1
            $old_filename1 = $this->input->post('old_banner1');
            $new_filename1 = $_FILES['banner1']['name'];
            
            // Banner 2
            $old_filename2 = $this->input->post('old_banner2');
            $new_filename2 = $_FILES['banner2']['name'];      

            // Banner 3
            $old_filename3 = $this->input->post('old_banner3');
            $new_filename3 = $_FILES['banner3']['name'];  

           if ($new_filename == TRUE) 
           {
                $update_filename = str_replace(' ', '-', $_FILES['logo']['name']);
                $config['upload_path']          = './upload/setting/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
                // $config['max_size']             = 10048; // 10MB
                $config['file_name']            = $update_filename;
                $config['encrypt_name']         = False;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('logo')) {
                    if (file_exists("./upload/setting/".$old_filename)) {
                        unlink("./upload/setting/".$old_filename);
                    }
                }
           }else{
                $update_filename = $old_filename;
           }
           // Banner1
           if ($new_filename1 == TRUE) 
           {
                $update_filename1 = str_replace(' ', '-', $_FILES['banner1']['name']);
                $config['upload_path']          = './upload/setting/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
                // $config['max_size']             = 10048; // 10MB
                $config['file_name']            = $update_filename1;
                $config['encrypt_name']         = False;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('banner1')) {
                    if (file_exists("./upload/setting/".$old_filename1)) {
                        unlink("./upload/setting/".$old_filename1);
                    }
                }
           }else{
                $update_filename1 = $old_filename1;
           }
           // Banner 2
           if ($new_filename2 == TRUE) 
           {
                $update_filename2 = str_replace(' ', '-', $_FILES['banner2']['name']);
                $config['upload_path']          = './upload/setting/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
                // $config['max_size']             = 10048; // 10MB
                $config['file_name']            = $update_filename2;
                $config['encrypt_name']         = False;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('banner2')) {
                    if (file_exists("./upload/setting/".$old_filename2)) {
                        unlink("./upload/setting/".$old_filename2);
                    }
                }
           }else{
                $update_filename2 = $old_filename2;
           }
           // Banner 3
           if ($new_filename3 == TRUE) 
           {
                $update_filename3 = str_replace(' ', '-', $_FILES['banner3']['name']);
                $config['upload_path']          = './upload/setting/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
                // $config['max_size']             = 10048; // 10MB
                $config['file_name']            = $update_filename3;
                $config['encrypt_name']         = False;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('banner3')) {
                    if (file_exists("./upload/setting/".$old_filename3)) {
                        unlink("./upload/setting/".$old_filename3);
                    }
                }
           }else{
                $update_filename3 = $old_filename3;
           }
           
           $data = array(
                'nama_masjid' => $this->input->post('nama_masjid'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'judul1' => $this->input->post('judul1'),
                'judul2' => $this->input->post('judul2'),
                'judul3' => $this->input->post('judul3'),
                'sosmed1' => $this->input->post('sosmed1'),
                'sosmed2' => $this->input->post('sosmed2'),
                'sosmed3' => $this->input->post('sosmed3'),
                'logo' => $update_filename,
                'banner1' => $update_filename1,
                'banner2' => $update_filename2,
                'banner3' => $update_filename3
            );
                $this->setting->update_setting($id_setting, $data);
                $this->session->set_flashdata('update', 'Data Setting Web Berhasil di Update');
                redirect('admin/setting');
        }else{
            return $this->edit($id_setting);
        }
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