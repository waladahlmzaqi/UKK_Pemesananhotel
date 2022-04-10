<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //source
    public function index(){
        return view('admin.dashboard');
    }

    public function kamar(){
        return view('admin.kamar.index');
    }

    public function fasikamar(){
        return view('admin.fasikamar.index');
    }

    public function fasihotel(){
        return view('admin.fasihotel.index');
    }
}
