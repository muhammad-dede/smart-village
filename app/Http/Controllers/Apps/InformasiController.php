<?php

namespace App\Http\Controllers\Apps;

use App\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformasiController extends Controller
{
    public function berita()
    {
        $menu = 'Berita';
        $sub_menu = null;
        $data_berita = Berita::where('sts_aktif', 1)->orderBy('publishedAt', 'desc')->get();
        return view('apps.berita', compact('menu', 'sub_menu', 'data_berita'));
    }

    public function sekitar()
    {
        $menu = 'Sekitar Anda';
        $sub_menu = 'Sekitar Anda';
        return view('apps.sekitar', compact('menu', 'sub_menu'));
    }
}
