<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/styles.css" rel="stylesheet" />
    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="scripts.js"></script>
</head>

<body>
    <div class="d-flex" id="wrapper">
        @include('layouts.app.sidebar')
        <div id="page-content-wrapper">
            @include('layouts.app.header')

            @yield('content')

            @include('layouts.app.footer')
        </div>
    </div>

</body>

</html>