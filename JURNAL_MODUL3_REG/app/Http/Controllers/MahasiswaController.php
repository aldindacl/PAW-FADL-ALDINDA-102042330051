<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        $mahasiswa = [
            'nama' => 'Aldinda Cinta Lestari',
            'nim' => '102042330051',
            'email' => 'aldinda@gmail.com',
            'jurusan' => 'Sistem Informasi',
            'fakultas' => 'Rekayasa Industri',
            'foto' => 'images/dinda.jpg' // pastikan file ada di public/images/
        ];

        // - Kirim object tersebut ke view 'profil'
        return view('profil', compact('mahasiswa'));
    }
}

