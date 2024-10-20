@extends('layouts.app')


@section('title')
Data Barang
@endsection

@section('content')
<!-- Page content-->
<div class="container-fluid mx-3">
    <h1>Data Barang</h1>
    <a href="{{ url('databarang/tambahdata')}}" class="btn btn-success mb-2">Buat Data Baru</a>

    <div class="table-responsive">
        <table class="table table-bordered " style="border: 2px solid; width: 95%;">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Tipe Barang</th>
                    <th>Merek Barang</th>
                    <th>Stok</th>
                    <th>Rak Barang</th>
                    <th>Nomor rak</th>
                    <th>Customizatizon</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @php($number = 1)
                    @foreach ($posts as $post)
                    <td>{{ $number }}</td>
                    <td>{{ $post->nama_barang}}</td>
                    <td>{{ $post->tipe_barang}}</td>
                    <td>{{ $post->merek_barang}}</td>
                    <td>{{ $post->stok}}</td>
                    <td>{{ $post->rak_barang}}</td>
                    <td>{{ $post->nomor_rak}}</td>
                    <td><a href="{{ url("databarang/$post->id/editdata") }}" class="btn btn-primary">Edit</a></td>

                    @php($number++)
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection