<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class OpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect('login');
        }$datas = DB::table('dataoperator')->get();
        // ->where('id', '=', $id)
        // ->first();

        $view_data = [
            'datas' => $datas,
        ];
        return view('posts.dataoperator', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        return view('posts.tambahdataoperator'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $nama_operator = $request->input('nama_operator');
        $nomor_karyawan = $request->input('nomor_karyawan');
        $factory = $request->input('factory');

        DB::table('dataoperator')->insert([
            'nama_operator' => $nama_operator,
            'nomor_karyawan' => $nomor_karyawan,
            'factory' => $factory,

        ]);

        return redirect('dataoperator');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $data = DB::table('dataoperator')
        ->select('id', 'nama_operator', 'nomor_karyawan', 'factory')
        ->where('id', '=', $id)
        ->first();

        $view_data = [
            'data' => $data
        ];
        return view('posts.editdataop', $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $nama_operator = $request->input('nama_operator');
        $nomor_karyawan = $request->input('nomor_karyawan');
        $factory = $request->input('factory');


        DB::table('dataoperator')
        ->select('id', 'nama_operator', 'nomor_karyawan', 'factory')
        ->where('id', $id)
        ->update([
            'nama_operator' => $nama_operator,
            'nomor_karyawan' => $nomor_karyawan,
            'factory' => $factory,
        ]);

        return redirect('dataoperator');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        DB::table('dataoperator')
        ->select('id', 'nama_operator', 'nomor_karyawan', 'factory')
        ->where('id', $id)->delete();

        return redirect('dataoperator');
    }
}
