    <!-- Sidebar-->
@extends('layouts.app')


    @section('title')
        Dashboard
    @endsection

    <!-- Page content wrapper-->
    @section('content')
    
        <!-- Top navigation-->

        <!-- Page content-->
        <div class="container-fluid mx-3">
            <h1>Dashboard</h1>
            <table class="table table-bordered" style="border: 2px solid;">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Tipe Barang</th>
                        <th>Merek Barang</th>
                        <th>Rak Barang</th>
                        <th>Nomor rak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @php($bill = 1)
                        <td>{{ $bill }}</td>
                        @php($bill++)
                        @foreach ($posts as $post)
                        <td>{{ $post->nama_barang}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endsection