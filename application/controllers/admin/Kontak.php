<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('Kontak_model', 'kontak');
        $this->load->model('Download_model', 'download');
	}

	public function index()
	{
        $data = [
            'judul' => 'Kontak',
            'title' => 'Kontak - Masjid Nurul Ilmi',
            'menu'  => 'kontak',
            'total_download' => $this->download->count_download(),
            'data_kontak' => $this->kontak->getDataKontak()
        ];
        $this->template->load('v_template_admin', 'admin/kontak/v_kontak', $data);
    }

    public function kirim_wa()
    {
        
        $no_hp = hp($this->kontak->getNomorHp());
        $nama = $this->kontak->getNama();   
        $pesan = "Halo! $nama, Kami dari Admin DKM Masjid Nurul Iilmi, Terimakasih Masukan yang kamu berikan semoga sehat selalu dan dilancarkan rezekinya,
        Jazakumullah khairan khatsiran!!";

        if ($no_hp) {
            $wa_link = "https://wa.me/$no_hp?text=" . urlencode($pesan);
            redirect($wa_link);
        }else {
            echo "Nomor Hp tidak ditemukan";
        }
    }
}