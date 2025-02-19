<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $nama = 'Salsabila Mahda';
        $nim = '2341720257';

        return "<p>Nama: $nama</p><p>NIM: $nim</p>";
    }
}