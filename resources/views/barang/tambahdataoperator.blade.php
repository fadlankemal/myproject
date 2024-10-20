<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-3 ">
        <h1>Tambah Data Operator</h1>
        <form method="POST" action="{{ url('dataop')}}" class="form-control">
            @csrf

            <div class="mb-3">
                <label for="namaoperator" class="form-label">Nama Operator</label>
                <input type="text" class="form-control" id="namabarang" placeholder="Nama Lengkap" name="nama_operator">
            </div>
            <div class="mb-3">
                <label for="nomorkaryawan" class="form-label">Nomor Karyawan</label>
                <input class="form-control" id="tipebarang" name="nomor_karyawan"></input>
            </div>
            <button type="submit" class="btn btn-success mb-2">Input</button>
        </form>
    </div>
</body>

</html>