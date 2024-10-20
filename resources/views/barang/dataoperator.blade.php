<!-- Page content-->
@extends('layouts.app')

@section('title')
Data Operator
@endsection


@section('content')
<div class="container-fluid mx-3">
    <h1>Data Operator</h1>
    <a href="{{ url('dataoperator/tambahdata')}}" class="btn btn-success mb-2">Tambah data</a>

    <div class="table-responsive">
        <table class="table table-bordered " style="border: 2px solid; width: 95%;">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Operator</th>
                    <th>Nomor Karyawan</th>
                    <th>Factory</th>
                    <th>Customizatizon</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @php($number = 1)
                    @foreach ($datas as $data)
                    <td>{{ $number }}</td>
                    <td>{{ $data->nama_operator}}</td>
                    <td>{{ $data->nomor_karyawan}}</td>
                    <td>{{ $data->factory}}</td>
                    <td><a href="{{ url("dataoperator/$data->id/editdataop") }}" class="btn btn-primary">Edit</a></td>

                    @php($number++)
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection