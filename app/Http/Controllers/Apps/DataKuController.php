<?php

namespace App\Http\Controllers\Apps;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataKuController extends Controller
{
    public function index()
    {
        $menu = 'DataKu';
        $sub_menu = null;
        // $dataku = Warga
        return view('apps.warga.dataku.index', compact('menu', 'sub_menu'));
    }

    public function edit()
    {
        $menu = 'DataKu';
        $sub_menu = null;
        return view('apps.warga.dataku.edit', compact('menu', 'sub_menu'));
    }
}
