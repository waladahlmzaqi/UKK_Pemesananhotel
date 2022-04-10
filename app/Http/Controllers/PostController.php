<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $postkamars = Post::latest()->paginate(10);

        return view('posts.index', compact('postkamars'));

    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tp_kamar'     => 'required',
            'jml_kamar'   => 'required'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        Kamar::create([
            'image'     => $image->hashName(),
            'tp_kamar'     => $request->tp_kamar,
            'jml_kamar'   => $request->jml_kamar
        ]);

        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(Post $post)
    {
        return view('admin.kamar.edit', compact('post'));
    }

    public function update(Request $request, Kamar $post)
    {

        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tp_kamar'     => 'required',
            'jml_kamar'   => 'required'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            Storage::delete('public/posts/'.$post->image);

            $post->update([
                'image'     => $image->hashName(),
                'tp_kamar'     => $request->tp_kamar,
                'jml_kamar'   => $request->jml_kamar,
            ]);

        } else {
            $post->update([
                'tp_kamar'     => $request->tp_kamar,
                'jml_kamar'   => $request->jml_kamar,
            ]);
        }

        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }


    public function destroy(Post $post)
    {
        Storage::delete('public/posts/'. $post->image);
        $post->delete();
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
