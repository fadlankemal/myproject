<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BarangController extends Controller
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
        $data = DB::table('databarang')->get();
        $view_data = [
            'data' => $data,
        ];
        return view('barang.databarang', $view_data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        return view('barang.tambahdata');
    }



    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $nama_barang = $request->input('nama_barang');
        $tipe_barang = $request->input('tipe_barang');
        $merek_barang = $request->input('merek_barang');
        $stok = $request->input('stok');
        $rak_barang = $request->input('rak_barang');
        $nomor_rak = $request->input('nomor_rak');
    
        DB::table('databarang')
        ->insert([
            'nama_barang' => $nama_barang,
            'tipe_barang' => $tipe_barang,
            'merek_barang' => $merek_barang,
            'stok' => $stok,
            'rak_barang' => $rak_barang,
            'nomor_rak' => $nomor_rak,
        ]);

        return redirect('databarang');
    }



    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     $post = DB::table('databarang')->where('id', $id)
    //         ->first();

    //     $view_data = [
    //         'post' => $post,
    //         'comments' => $comments,
    //     ];
    //     return view('posts.show', $view_data);
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $datum = DB::table('databarang')->where('id', $id)
            ->first();

        $view_data = [
            'datum' => $datum
        ];
        return view('barang.editdata', $view_data);
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
        $stok = $request->input('stok');
        $rak_barang = $request->input('rak_barang');
        $nomor_rak = $request->input('nomor_rak');

        DB::table('databarang')->where('id', $id)
            ->update([
                'nama_barang' => $nama_barang,
                'tipe_barang' => $tipe_barang,
                'merek_barang' => $merek_barang,
                'stok' => $stok,
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
        DB::table('databarang')->where('id', $id)->delete();

        return redirect('databarang');
    }
}
