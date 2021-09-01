<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index(request $request)
    {
        $active='home'; $menu='Home';
        return view('home',compact('active','menu'));
    }
}
