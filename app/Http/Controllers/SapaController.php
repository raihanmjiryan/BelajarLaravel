<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SapaController extends Controller
{
        // Menampilkan halaman daftar produk
    public function index()
    {
        $nama = 'Sendy Prayogo';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }


}
