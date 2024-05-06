<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('Bidang_model', 'bidang');
		$this->load->model('Setting_model', 'setting');

	}

    // Bidang Baitul
	public function baitul()
	{
        $data = [
            'judul' => 'Baitul Mal & Sosial',
            'title' => 'Baitul Mal & Sosial - Masjid Nurul Ilmi',
            'menu'  => 'baitul',
            'data_baitul' => $this->bidang->getDataBaitul(),
			'data_setting' => $this->setting->getDataSetting()

        ];
		$this->load->view('webpage/v_baitul', $data);
	}

    // Bidang Dakwah
    public function dakwah()
	{
        $data = [
            'judul' => 'Ibadah & Dakwah',
            'title' => 'Ibadah & Dakwah - Masjid Nurul Ilmi',
            'menu'  => 'dakwah',
            'data_dakwah' => $this->bidang->getDataDakwah(),
			'data_setting' => $this->setting->getDataSetting()

        ];
		$this->load->view('webpage/v_dakwah', $data);
	}

    // Bidang Kepemudaan
    public function kepemudaan()
	{
        $data = [
            'judul' => 'Kepemudaan',
            'title' => 'Kepemudaan - Masjid Nurul Ilmi',
            'menu'  => 'kepemudaan',
            'data_pemuda' => $this->bidang->getDataKepemudaan(),
			'data_setting' => $this->setting->getDataSetting()

        ];
		$this->load->view('webpage/v_pemuda', $data);
	}

    // Bidang SDM & Pendidikan
    public function sdm()
	{
        $data = [
            'judul' => 'SDM & Pendidikan',
            'title' => 'SDM & Pendidikan - Masjid Nurul Ilmi',
            'menu'  => 'sdm',
            'data_sdm' => $this->bidang->getDataSDM(),
			'data_setting' => $this->setting->getDataSetting()

        ];
		$this->load->view('webpage/v_sdm', $data);
	}

    // Bidang Umum & Kerumahtanggaan
    public function umum()
	{
        $data = [
            'judul' => 'Umum & Kerumahtanggaan',
            'title' => 'Umum & Kerumahtanggaan - Masjid Nurul Ilmi',
            'menu'  => 'umum',
            'data_umum' => $this->bidang->getDataUmum(),
			'data_setting' => $this->setting->getDataSetting()

        ];
		$this->load->view('webpage/v_umum', $data);
	}

    // Bidang Hubungan Masyarakat
    public function humas()
	{
        $data = [
            'judul' => 'Hubungan Masyarakat',
            'title' => 'Hubungan Masyarakat - Masjid Nurul Ilmi',
            'menu'  => 'humas',
            'data_humas' => $this->bidang->getDataHumas(),
			'data_setting' => $this->setting->getDataSetting()

        ];
		$this->load->view('webpage/v_humas', $data);
	}

    // Bidang Keamanan & Ketertiban
    public function kartib()
	{
        $data = [
            'judul' => 'Keamanan & Ketertiban',
            'title' => 'Keamanan & Ketertiban - Masjid Nurul Ilmi',
            'menu'  => 'kartib',
            'data_kartib' => $this->bidang->getDataKartib(),
			'data_setting' => $this->setting->getDataSetting()

        ];
		$this->load->view('webpage/v_kartib', $data);
	}
}