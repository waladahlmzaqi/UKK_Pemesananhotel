<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use App\Models\Kamar;
use Barryvdh\DomPDF\Facade\PDF;

class TamuController extends Controller
{
    public function index(){
        $datak =Kamar::all();
        return view('tamu.index', compact('datak'));
    }

    public function store(Request $request){
        $data = Reservasi::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('img/kamar/',$request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('pemesanan.reservasi');
    }

    public function show(){
        $data = Reservasi::all();
        return view('tamu.reservasi', compact('data'));
    }

    public function pdf($id){
        $data = Reservasi::find($id);
        $pdf = PDF::loadview('tamu.pdfreservasi', compact('data'));
        return $pdf->download('Laporan_data_reservasi.pdf');
    }

    public function delete($id){
        $data = Reservasi::find($id);
        $data->delete();
        return redirect()->route('resepsionis.reservasi');
    }
}
