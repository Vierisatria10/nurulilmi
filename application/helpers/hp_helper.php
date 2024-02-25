<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function hp($string)
{
    $string = str_replace(" ", "", $string);
    // ada penulisan no hp 0811 239 345
    $string = str_replace("(","",$string);
    $string = str_replace(")","",$string);
    $string = str_replace(".","",$string);

    if (!preg_match('/[^+0-9]/', trim($string)))
    // cek apakah no hp mengandung karakter + dan 0-9 
    {
        if(substr(trim($string), 0, 3) == '+62')
        // cek apakah no hp karakter 1-3 adalah +62
        {
            $string = trim($string);
        }
        elseif(substr(trim($string), 0, 1) == '0')
        // cek apakah no hp karakter 1 adalah 0
        {
            $string = '+62'.substr(trim($string), 1);
        }
        // fungsi trim() untuk menghilangkan
        // spasi yang ada didepan/belakang
    }
        else
        {   
            $string = 'Format no hp yang dimasukkan tidak lengkap atau salah!';
        }
    return $string;
}