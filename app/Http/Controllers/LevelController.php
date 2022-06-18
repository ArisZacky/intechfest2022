<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LevelController extends Controller
{
    //
    public function level() {
        if(Auth::user()->level == 'admin'){
            return view('admin.dashboard',[
                "title" => "Home",
                "judul" => "Selamat datang di Dashboard Intech Fest Admin ".Auth::user()->email.""
            ]);
        }
        else{
            return redirect()->action([RegisUserController::class, 'index']);
        }
       
    }
}
