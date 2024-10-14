<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
        $posts = DB::table('posts')->select('nama_barang', 'tipe_barang', 'merek_barang', 'rak_barang', 'nomor_rak')->get();
        $view_data = [
            'posts' => $posts,
        ];
        return view('posts.index', $view_data);
    }

    public function databarang()
    {
        $posts = DB::table('posts')->select('id', 'nama_barang', 'tipe_barang', 'merek_barang', 'rak_barang', 'nomor_rak')
        ->where('kolom', true)
        ->get();
        $view_data = [
            'posts' => $posts
        ];
        return view('posts.databarang', $view_data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.tambahdata');
    }



    public function store(Request $request)
    {
        $nama_barang = $request->input('nama_barang');
        $tipe_barang = $request->input('tipe_barang');
        $merek_barang = $request->input('merek_barang');
        $rak_barang = $request->input('rak_barang');
        $nomor_rak = $request->input('nomor_rak');

        DB::table('posts')->insert([
            'nama_barang' => $nama_barang,
            'tipe_barang' => $tipe_barang,
            'merek_barang' => $merek_barang,
            'rak_barang' => $rak_barang,
            'nomor_rak' => $nomor_rak,
        ]);

        return redirect('posts/databarang');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = DB::table('posts')
            ->select('id', 'nama_barang', 'tipe_barang', 'merek_barang', 'rak_barang', 'nomor_rak')
            ->where('id', '=', $id)
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
        $nama_barang = $request->input('nama_barang');
        $tipe_barang = $request->input('tipe_barang');
        $merek_barang = $request->input('merek_barang');
        $rak_barang = $request->input('rak_barang');
        $nomor_rak = $request->input('nomor_rak');

        DB::table('posts')
        ->where('id', $id)
        ->update([
            'nama_barang' => $nama_barang,
            'tipe_barang' => $tipe_barang,
            'merek_barang' => $merek_barang,
            'rak_barang' => $rak_barang,
            'nomor_rak' => $nomor_rak,

        ]);

        return redirect('posts/databarang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
