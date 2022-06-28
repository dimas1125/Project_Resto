<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function adminHome()
    {
        return view('admin.index');
    }

    public function manajerHome()
    {
        return view('manajer.index');
    }

    public function kasirHome()
    {
        return view('kasir.index');
    }
}
