<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myquran_curl {
    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
    }

    public function get_city_data() {
        $url = "https://api.myquran.com/v2/sholat/kota/semua";

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, true);
    }

    public function get_jadwal_shalat($cityId) {
        $date = date('Y-m-d');
        $url = "https://api.myquran.com/v2/sholat/jadwal/". $cityId . "/" . $date;
        // $url .= "kota/$city_id";

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        curl_close($curl);

        return json_decode($result, true);
    }
}