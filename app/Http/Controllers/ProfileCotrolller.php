<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileCotrolller extends Controller
{
    public function index (){
        $nama = "Yanti Setiawati"
        $alamat = "Kota Bandung"
        $tanggal_lahir = "31 maret 2002";

        return view ('profil', compact ('nama',
        'alamat',
        'tanggal_lahir)
        );
    }
}
