<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
     public function index(){
        $nama = "Yanti Setiawati";
        $alamat = "Kota Bandung";
        $tanggal_lahir = "31 maret 2002";

        $data_array = array(
            "nama" => array(
                "Yanti","tia","yaya",
            ),
        );
        return view ('profile.index', compact ('nama',
        'alamat',
        'tanggal_lahir',
        'data_array')
        );
     }
}