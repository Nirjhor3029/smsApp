<?php
$themePath = asset('theme/');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ekSHop-SMS | @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ $themePath }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ $themePath }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ $themePath }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ $themePath }}/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ $themePath }}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ $themePath }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ $themePath }}/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ $themePath }}/plugins/summernote/summernote-bs4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ $themePath }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ $themePath }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ $themePath }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ $themePath }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ $themePath }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ $themePath }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">


    {{-- Custom --}}
    <link rel="stylesheet" href="{{ asset('/backend/assets/css/') }}/admin_layout.css">

    @yield('styles')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ $themePath }}/dist/img/AdminLTELogo.png" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <!-- Navbar -->
        @include('backend.layouts.partials.admin_navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('backend.layouts.partials.admin_sidebar')
        <!-- Main Sidebar Container- End -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('content-header')
            <!-- /.content-header -->

            <!-- Main content -->
            @yield('admin-content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        {{-- Footer-start --}}
        @include('backend.layouts.partials.admin_footer')
        {{-- Footer-end --}}

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ $themePath }}/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ $themePath }}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ $themePath }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ $themePath }}/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{ $themePath }}/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{ $themePath }}/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ $themePath }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ $themePath }}/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{ $themePath }}/plugins/moment/moment.min.js"></script>
    <script src="{{ $themePath }}/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ $themePath }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="{{ $themePath }}/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ $themePath }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ $themePath }}/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ $themePath }}/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ $themePath }}/dist/js/pages/dashboard.js"></script>
    <!-- Select2 -->
    <script src="{{ $themePath }}/plugins/select2/js/select2.full.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="{{ $themePath }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ $themePath }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ $themePath }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ $themePath }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ $themePath }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ $themePath }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ $themePath }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ $themePath }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ $themePath }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ $themePath }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ $themePath }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ $themePath }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


    @yield('scripts')

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });
        });
    </script>

</body>

</html>
