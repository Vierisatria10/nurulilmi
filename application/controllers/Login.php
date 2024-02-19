<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('LoginModel', 'login');
        // $this->load->model('UserModel', 'user');
    }
    
	public function index()
	{
        $data = [
            'judul' => 'Login',
            'title' => 'Login - Masjid Nurul Ilmi',
            'menu'  => 'login',
        ];
		$this->load->view('auth/v_login', $data);
	}

    public function auth()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim',
            ['required' => 'Username Wajib diisi']
        );
        $this->form_validation->set_rules('password', 'Password', 'required',
            ['required' => 'Password Wajib diisi']
        );

        if ($this->form_validation->run() == false) {
            $data = [
                'judul' => 'Login',
                'title' => 'Login - Masjid Nurul Ilmi',
                'menu'  => 'login',
            ];
            $this->load->view('auth/v_login', $data);
        }else{
            $username = $this->input->post('username');
            $password = sha1($this->input->post('password'));
            $validate = $this->login->validate($username, $password);

            if ($validate->num_rows() > 0) {
                $data = $validate->row_array();
                $id_user = $data['id_user'];
                $nama = $data['nama'];
                $username = $data['username'];
                $level = $data['level'];
                $foto = $data['foto'];
                $password = $data['password'];

                $session_data = array(
                    'id_user' => $id_user,
                    'nama' => $nama,
                    'username' => $username,
                    'foto'  => $foto,
                    'level' => $level,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata('user_data',$session_data);
                // acces login for admin
                if ($level === 'Administrator') {
                    echo $this->session->set_flashdata('pesan', '
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i> Berhasil</h4>
                        Selamat Datang di Website Masjid Nurul Ilmi Anda Berhasil Login Sebagai <b>'. $nama .'</b>
                    </div>');
                    redirect('admin/dashboard');
                }else if($level === 'Pengurus') {
                    echo $this->session->set_flashdata('pesan', '
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i> Berhasil</h4>
                        Selamat Datang di Website Manajemen Kost SaluvKost Anda Berhasil Login Sebagai <b>'. $nama .'</b>
                    </div>');
                    redirect('pengurus/dashboard');
                }
            }else{
                echo $this->session->set_flashdata('pesan', '
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Username atau Password Salah
                </div>');
                redirect('Login');
            }
        }

        
    }

    public function logout()
    {
        $this->session->sess_destroy();
        echo $this->session->set_flashdata('msg', '
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Terimakasih Anda Sudah Logout.
        </div>
        ');
        redirect('login');
    }
}