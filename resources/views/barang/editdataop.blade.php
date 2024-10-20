<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Barang</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-2">
        <h1>Edit Data Barang</h1>
        <form method="POST" action="{{url ("data/$data->id")}}" class="form-control">
            @method('PATCH')
            @csrf

            <div class="mb-3">
                <label for="namaoperator" class="form-label">Nama Operator</label>
                <input type="text" class="form-control" id="namaoperator" placeholder="Nama Lengkap" name="nama_operator" value="{{ $data->nama_operator }}">
            </div>
            <div class="mb-3">
                <label for="nomorkaryawan" class="form-label">Nomor Karyawan</label>
                <input class="form-control" id="nomorkaryawan" name="nomor_karyawan" value="{{ $data->nomor_karyawan }}"></input>
            </div>
            <button type="submit" class="btn btn-success mb-2">Input</button>
        </form>
        <form method="POST" action="{{url ("data/$data->id")}}" class="form-control">
            @method('delete')
            @csrf
            <button type="submit" value="delete"class="btn btn-danger">DELETE</button>
        </form>
    </div>
</body>
</html>