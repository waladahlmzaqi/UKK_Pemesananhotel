<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FasiHotel;


class FasiHotelController extends Controller
{
    public function index(){
        $data =FasiHotel::all();
        return view('admin.fasihotel.index', compact('data'));
    }

    public function create(){
        return view('admin.fasihotel.create');
    }

    public function store(Request $request){
        $data = FasiHotel::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('img/fasihotel/',$request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('admin.fasihotel.index');
    }

    public function edit($id){
        $data = FasiHotel::find($id);
        return view('admin.fasihotel.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $data = FasiHotel::find($id);
        $data->update($request->all());
        return redirect()->route('admin.fasihotel.index');
    }

    public function delete($id){
        $data = FasiHotel::find($id);
        $data->delete();
        return redirect()->route('admin.fasihotel.index');
    }
}
