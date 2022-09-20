<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function pnbwdc()
    {
        return view('pnbwdc');
    }

    public function pnbdc()
    {
        return view('pnbdc');
    }

    public function pnbctf()
    {
        return view('pnbctf');
    }
    public function chilltalks()
    {
        return view('chilltalks');
    }
}
