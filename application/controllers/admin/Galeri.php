<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
          }
		$this->load->model('Galeri_model', 'galeri');
        $this->load->model('Download_model', 'download');
	}

	public function index()
	{
        $data = [
            'judul' => 'Data Galeri',
            'title' => 'Galeri - Masjid Nurul Ilmi',
            'menu'  => 'galeri',
            'total_download' => $this->download->count_download(),
            // 'data_imam' => $this->imam->getDataImam()
        ];
		$this->template->load('v_template_admin', 'admin/galeri/v_galeri', $data);
	}

    public function getdata()
    {
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));
        $query = $this->galeri->get_data();
        $data = [];
        $no = 0;
        foreach ($query->result() as $key => $lists) {
            $no++;
            $data[$key][]  = $no;
            $data[$key][]  = $lists->galeri_nama;
            $data[$key][]  = '
                    <a href="' . base_url() . 'upload/galeri/' . $lists->galeri_foto . '" data-toggle="lightbox" data-title="' . $lists->galeri_nama . '" data-gallery="gallery">
                      <img src="' . base_url() . 'upload/galeri/' . $lists->galeri_foto . '" width="100" class="img-fluid mb-2" alt="' . $lists->galeri_nama . '"/>
                    </a>
                  '. '';
            $data[$key][]  = $lists->galeri_user;

            $data[$key][]  = ' 
            <a href="javascript:;" class="btn btn-info btn-sm bedit" data="' . $lists->galeri_id . '" ><i class="fa fa-edit nav-icon"></i></a>
            <a href="javascript:;" class="btn btn-danger btn-sm bhapus" data="' . $lists->galeri_id . '"><i class="fa fa-trash nav-icon"></i></a>';
        }


        $result = array(
            "draw" => $draw,
            "recordsTotal" => $query->num_rows(),
            "recordsFiltered" => $query->num_rows(),
            "data" => $data
        );


        echo json_encode($result);
        exit();
    }

    public function simpan()
    {
        if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];
            $fileName = $_FILES['file']['name'];
            $fileType = $_FILES['file']['type'];
            $fileSize = $_FILES['file']['size'];
            $targetPath = './upload/galeri/';
            $targetFile = $targetPath . $fileName;
           
            move_uploaded_file($tempFile, $targetFile);
            $user = $this->session->userdata("user_id");
            $this->db->insert('tbl_galeri', array( 'galeri_user' => $user, 'galeri_foto' => $fileName));
        }
    }

      private function _configUpload()
    {
        $config['upload_path'] = $this->path;
        $config['allowed_types'] = 'gif|jpg|jpeg|png|jpeg|bmp';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload');
        $this->upload->initialize($config);
    }

    private function _compressImg($name)
    {
        $config['image_library']    = 'gd2';
        $config['source_image']     = $this->path . '/' . $name;
        $config['create_thumb']     = FALSE;
        $config['maintain_ratio']   = TRUE;
        $config['quality']          = '70%';
        $config['width'] = 185;
        $config['height'] = 58;
        $config['new_image']        = $this->path . '/' . $name;

        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }

    public function upload() {
        $config['upload_path']   = FCPATH.'/upload/galeri/';
        $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$token=$this->input->post('token_foto');
            $user = $this->session->userdata('nama');
        	$galeri_foto=$this->upload->data('file_name');
            // $insert = [
            //     'galeri_foto' => $galeri_foto,
            //     'galeri_user' => $user,
            //     'token'       => $token  
            // ];
            // $this->galeri->simpan_galeri($insert);
            // redirect('admin/galeri');
        	$this->db->insert('tbl_galeri',array('galeri_foto'=>$galeri_foto, 'galeri_user' => $user, 'token'=>$token));
           
        }
         $this->session->userdata('success', 'Sukses Fil upload foto berhasil');
            redirect('admin/galeri');
    }
    
    public function showedit()
    {
        $koser = $this->input->get('id');
        $user = $this->galeri->show_edit($koser);
		if ($user->num_rows() > 0) {
			foreach ($user->result() as $data) {
				$hasil = array(
					'galeri_nama' => $data->galeri_nama,
                    'galeri_foto' => $data->galeri_foto
				);
			}
		}
		echo json_encode($hasil);
    }

    public function simpanedit()
    {
        $data = array(
			'galeri_nama' => $this->input->post('judul'),
		);
		$this->db->where('galeri_id', $this->input->post('id'));
		$simpan = $this->db->update('tbl_galeri', $data);
		if ($simpan) {
			echo 'success';
		} else {
			echo 'error';
		}
    }

    //Untuk menghapus foto
	public function remove_foto(){

		//Ambil token foto
		$token=$this->input->post('token');

		
		$foto=$this->db->get_where('tbl_galeri',array('token'=>$token));


		if($foto->num_rows()>0){
			$hasil=$foto->row();
			$galeri_foto=$hasil->galeri_foto;
			if(file_exists($file=FCPATH.'/upload/galeri/'.$galeri_foto)){
				unlink($file);
			}
			$this->db->delete('galeri_foto',array('token'=>$token));

		}


		echo "{}";
	}

    public function add()
    {
        $data = $galleryData = array();
        $errorUpload = '';

        // If add request is submitted 
        if ($this->input->post('imgSubmit')) {
            // Form field validation rules 
            $this->form_validation->set_rules('title', 'gallery title', 'required');

            // Prepare gallery data 
            $galleryData = array(
                'title' => $this->input->post('title')
            );

            // Validate submitted form data 
            if ($this->form_validation->run() == true) {
                // Insert gallery data 
                $insert = $this->m_gallery->insert($galleryData);
                $galleryID = $insert;

                if ($insert) {
                    if (!empty($_FILES['images']['name'])) {
                        $filesCount = count($_FILES['images']['name']);
                        for ($i = 0; $i < $filesCount; $i++) {
                            $_FILES['file']['name']     = $_FILES['images']['name'][$i];
                            $_FILES['file']['type']     = $_FILES['images']['type'][$i];
                            $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                            $_FILES['file']['error']    = $_FILES['images']['error'][$i];
                            $_FILES['file']['size']     = $_FILES['images']['size'][$i];

                            // File upload configuration 
                            $this->_configUpload();


                            // Upload file to server 
                            if ($this->upload->do_upload('file')) {
                                // Uploaded file data 
                                $fileData = $this->upload->data();
                                $this->_compressImg($fileData['file_name']);
                                $uploadData[$i]['gallery_id'] = $galleryID;
                                $uploadData[$i]['file_name'] = $fileData['file_name'];
                                $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                            } else {
                                echo 'error';
                            }
                        }

                        // File upload error message 
                        $errorUpload = !empty($errorUpload) ? ' Upload Error: ' . trim($errorUpload, ' | ') : '';

                        if (!empty($uploadData)) {
                            // Insert files info into the database 
                            $insert = $this->m_gallery->insertImage($uploadData);
                        }
                    }

                    $this->session->set_userdata('success_msg', 'Gallery has been added successfully.' . $errorUpload);
                    redirect('k_galeri/index');
                } else {
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }

        $data['gallery'] = $galleryData;
        $data['title'] = 'Create Gallery';
        $data['action'] = 'Add';

        //settingdata masjid

        $data['judulweb'] = $this->m_masjid->detail()->masjid_nama;
        $data['logo'] = $this->m_masjid->detail()->masjid_logo;

        //

        $data['judul'] = 'Kelola Gallery';

        $this->load->view('paneladmin/partials/header', $data);
        $this->load->view('paneladmin/partials/sidebar', $data);
        $this->load->view('paneladmin/gallery/tambah', $data);
        $this->load->view('paneladmin/partials/footergaleri', $data);
    }
    
}