<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TrailFive | Technologies</title>
    @yield('header')

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        @yield('navbar')
        @yield('sidebar')

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('breadcrum')
            <!-- /.content-header -->
            @yield('contant')
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">trailfive.com</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

    </div>

    @yield('footer')

</body>

</html>