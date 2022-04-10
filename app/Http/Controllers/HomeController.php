<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FasiHotel;
use App\Models\Kamar;

class HomeController extends Controller
{
    public function home(){
        $data =FasiHotel::all();
        $datak =Kamar::all();
        $relasi = Kamar::get();
        return view('dashboard', compact('data','datak','relasi'));
    }

    public function test(){
        return view('test2');
    }
}
