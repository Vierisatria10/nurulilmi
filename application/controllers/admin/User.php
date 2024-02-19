<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
          }
        $this->load->model('User_model', 'user');
        
    }
	public function index()
	{
        $data = [
            'judul' => 'User',
            'title' => 'User - Masjid Nurul Ilmi',
            'menu'  => 'user',
            'data_user' => $this->user->getDataUser()
        ];
		$this->template->load('v_template_admin', 'admin/user/v_user', $data);
	}

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required',
            ['required' => 'Nama Wajib diisi']
        );
        $this->form_validation->set_rules('username', 'Username', 'trim|required',
            ['required' => 'Username Wajib diisi']
        );
        $this->form_validation->set_rules('no_hp', 'No Hp', 'trim|required',
            ['required' => 'No Hp Wajib diisi']
        );
        $this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[8]',
            ['required' => 'Password Wajib diisi',
             'max_length' => 'Field %s maksimal harus 8 Karakter'
            ]
        );  
        if ($this->form_validation->run() == FALSE) {
             $data = [
                'judul' => 'User',
                'title' => 'User - Masjid Nurul Ilmi',
                'menu'  => 'user',
                'data_user' => $this->user->getDataUser()
            ];
		    $this->template->load('v_template_admin', 'admin/user/v_tambah', $data);
        } else {
            // File Upload Configuration
            $config['upload_path']          = './upload/user/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
            $config['max_size']             = 10048; // 10MB
            $config['encrypt_name']         = False;
            
            $this->load->library('upload', $config);
            // $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto')) {
                $error =$this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('admin/user/tambah');
            } else {
                $save = [
                    'nama' => $this->input->post('nama'),
                    'username' => $this->input->post('username'),
                    'password' => sha1($this->input->post('password')),
                    'no_hp' => $this->input->post('no_hp'),
                    'level' => $this->input->post('level'),
                    'foto' => $this->upload->data('file_name')
                ];
                $this->user->add_user($save);
                $this->session->set_flashdata('success', 'Data User Berhasil di Simpan');
                redirect('admin/user');
            }
            
        }
    }

    public function edit($id_user) {
        $data = [
            'judul' => 'User',
            'title' => 'User - Masjid Nurul Ilmi',
            'user' => $this->user->get_user_detail($id_user),
            'menu'  => 'user',
        ];
        $this->template->load('v_template_admin', 'admin/user/v_edit', $data);
    }

    public function update($id_user)
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required',
            ['required' => 'Field %s Wajib diisi']
        );
        $this->form_validation->set_rules('username', 'Username', 'trim|required',
            ['required' => 'Field %s wajib diisi']
        );
        $this->form_validation->set_rules('no_hp', 'No Hp', 'trim|required',
            ['required' => 'Field %s Wajib diisi']
        );
        $this->form_validation->set_rules('level', 'Level', 'trim|required',
            ['required' => 'Field %s wajib diisi']
        );
        
        if ($this->form_validation->run()) {
           $old_filename = $this->input->post('old_foto');
           $new_filename = $_FILES['foto']['name'];

           if ($new_filename == TRUE) 
           {
                $update_filename = str_replace(' ', '-', $_FILES['foto']['name']);
                $config['upload_path']          = './upload/user/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
                // $config['max_size']             = 10048; // 10MB
                $config['file_name']            = $update_filename;
                $config['encrypt_name']         = False;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    if (file_exists("./upload/user/".$old_filename)) {
                        unlink("./upload/user/".$old_filename);
                    }
                }
           }else{
                $update_filename = $old_filename;
           }
           
           $data = array(
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'no_hp' => $this->input->post('no_hp'),
                'level' => $this->input->post('level'),
                'foto' => $update_filename
            );
                $this->user->update_user($id_user, $data);
                $this->session->set_flashdata('update', 'Data User Berhasil di Update');
                redirect('admin/user');
        }else{
            return $this->edit($id_user);
        }
    }
}