<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/styles.css" rel="stylesheet" />
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Management Data</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ url('posts/databarang')}}">Data Barang</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ url('posts/show{id}')}}">Barang Masuk</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Barang Keluar</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Data Stok</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Laporan Masuk</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Laporan Keluar</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Data Operator</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Logout</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-danger" id="sidebarToggle">Menu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Action</a>
                                    <a class="dropdown-item" href="#!">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                <h1>Data Barang</h1>
                <a href="{{ url('posts/create')}}" class="btn btn-success mb-2">Tambah data</a>
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

            
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="scripts.js"></script>
</body>

</html>