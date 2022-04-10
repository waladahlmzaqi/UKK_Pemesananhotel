<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;


class KamarController extends Controller
{
    public function oneToMany()
    {
        return view('test', [
            'kamars' => Kamar::get(),
        ]);
    }

    public function index(){
    $data =Kamar::all();
        return view('admin.kamar.index', compact('data'));
    }

    public function create(){
        return view('admin.kamar.create');
    }

    public function store(Request $request){
        $data = Kamar::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('img/kamar/',$request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('admin.kamar.index');
    }

    public function edit($id){
        $data = Kamar::find($id);
        return view('admin.kamar.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $data = Kamar::find($id);
        $data->update($request->all());
        return redirect()->route('admin.kamar.index');
    }

    public function delete($id){
        $data = Kamar::find($id);
        $data->delete();
        return redirect()->route('admin.kamar.index');
    }
}
