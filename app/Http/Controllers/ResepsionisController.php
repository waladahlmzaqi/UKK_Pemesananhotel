<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;


class ResepsionisController extends Controller
{
    public function index(){
        return view('resepsionis.dashboard');
    }

    public function reservasi(){
        $data = Reservasi::all();
        return view('resepsionis.reservasi.index' , compact('data'));
    }
}
