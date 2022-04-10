<?php

namespace App\Http\Controllers;

use App\Models\FasiKamar;
use App\Models\Kamar;
use Illuminate\Http\Request;

class FasiKamarController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admin.fasikamar.index', [
            'fasi_kamars' => FasiKamar::get(),
        ]);
    }

    public function create(){
        // return view('admin.fasikamar.create');
        $datakamar = Kamar::all();
        return view('admin.fasikamar.create', compact('datakamar'));
    }

    public function store(Request $request){
        $data = FasiKamar::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('img/fasikamar/',$request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('admin.fasikamar.index');
    }

    public function edit($id){
        $data = FasiKamar::find($id);
        $datakamar = Kamar::all();
        return view('admin.fasikamar.edit', compact('data','datakamar'));
    }

    public function update(Request $request, $id){
        $data = FasiKamar::find($id);
        $data->update($request->all());
        return redirect()->route('admin.fasikamar.index');
    }

    public function delete($id){
        $data = FasiKamar::find($id);
        $data->delete();
        return redirect()->route('admin.fasikamar.index');
    }
}
