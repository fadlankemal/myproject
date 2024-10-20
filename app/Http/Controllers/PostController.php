<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Types\Model\Posts;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // if (!Auth::check()) {
        //     return redirect('login');
        // }
        if (!Auth::check()) {
            return redirect('login');
        }
        $posts = Post::kolom()->get();
        $view_data = [
            'posts' => $posts,
        ];
        return view('posts.index', $view_data);
    }

    public function databarang()
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $datas = Post::kolom()->get();
        $view_data = [
            'posts' => $datas,
        ];
        return view('posts.databarang', $view_data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        return view('posts.tambahdata');
    }



    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $nama_barang = $request->input('nama_barang');
        $tipe_barang = $request->input('tipe_barang');
        $merek_barang = $request->input('merek_barang');
        $rak_barang = $request->input('rak_barang');
        $nomor_rak = $request->input('nomor_rak');

        Post::insert([
            'nama_barang' => $nama_barang,
            'tipe_barang' => $tipe_barang,
            'merek_barang' => $merek_barang,
            'rak_barang' => $rak_barang,
            'nomor_rak' => $nomor_rak,
        ]);

        return redirect('databarang');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::where('id', $id)
            ->first();
        $comments = $post->comments()->limit(2)->get();

        $view_data = [
            'post' => $post,
            'comments' => $comments,
        ];
        return view('posts.show', $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $post = Post::where('id', $id)
            ->first();

        $view_data = [
            'post' => $post
        ];
        return view('posts.editdata', $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        if (!Auth::check()) {
            return redirect('login');
        }$nama_barang = $request->input('nama_barang');
        $tipe_barang = $request->input('tipe_barang');
        $merek_barang = $request->input('merek_barang');
        $rak_barang = $request->input('rak_barang');
        $nomor_rak = $request->input('nomor_rak');

        Post::where('id', $id)
            ->update([
                'nama_barang' => $nama_barang,
                'tipe_barang' => $tipe_barang,
                'merek_barang' => $merek_barang,
                'rak_barang' => $rak_barang,
                'nomor_rak' => $nomor_rak,

            ]);

        return redirect('databarang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        Post::where('id', $id)->delete();

        return redirect('databarang');
    }
}
