<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="{!! asset('backent/images/favicon.jpg') !!}" type="image/x-icon">


    <!-- Start Global Mandatory Style
    =====================================================================-->

    <!-- jquery-ui css -->
    <link href="{!! asset('backent/plugins/jquery-ui-1.12.1/jquery-ui.min.css') !!}" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap -->
    <link href="{!! asset('backent/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap rtl -->
    <!--<link href="backent/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
    <!-- Lobipanel css -->
    <link href="{!! asset('backent/plugins/lobipanel/lobipanel.min.css') !!}" rel="stylesheet" type="text/css"/>
    <!-- Pace css -->
    <link href="{!! asset('backent/plugins/pace/flash.css') !!}" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome -->
    <link href="{!! asset('backent/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css"/>
    <!-- Pe-icon -->
    <link href="{!! asset('backent/pe-icon-7-stroke/css/pe-icon-7-stroke.css') !!}" rel="stylesheet" type="text/css"/>
    <!-- Themify icons -->
    <link href="{!! asset('backent/themify-icons/themify-icons.css') !!}" rel="stylesheet" type="text/css"/>
    @yield('css')

    <!-- End Global Mandatory Style
    =====================================================================-->
    <!-- Start page Label Plugins
    =====================================================================-->
    <!-- dataTables css -->
    <link href="{!! asset('backent/plugins/datatables/dataTables.min.css') !!}" rel="stylesheet" type="text/css"/>
    <!-- End page Label Plugins
    =====================================================================-->
    <!-- Start Theme Layout Style
    =====================================================================-->
    <!-- Theme style -->
    <link href="{!! asset('backent/dist/css/styleBD.css') !!}" rel="stylesheet" type="text/css"/>
    <!-- Theme style rtl -->
    <!--<link href="backent/dist/css/styleBD-rtl.css" rel="stylesheet" type="text/css"/>-->
    <!-- End Theme Layout Style
    =====================================================================-->
    @yield('css')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <header class="main-header">
        <a href="{!! url('/') !!}" class="logo" > <!-- Logo -->
            <span class="logo-mini">
                        <!--<b>A</b>BD-->
                        <img src="{!! asset('backent/images/login-logo.jpg') !!}" alt="">
                    </span>
            <span class="logo-lg">
                        <!--<b>Admin</b>BD-->
                        <img src="{!! asset('backent/images/login-logo.jpg') !!}" alt="">
                    </span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
                <span class="sr-only">Toggle navigation</span>
                <span class="pe-7s-keypad"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages -->

                    <!-- settings -->
                    <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="pe-7s-settings"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="pe-7s-users"></i> User Profile</a></li>
                            <li><a href="#"><i class="pe-7s-settings"></i> Settings</a></li>

                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="pe-7s-key"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- =============================================== -->
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar -->
        <div class="sidebar">
            <!-- sidebar menu -->
            @yield('nav')
            <!-- //sidebar menu -->
        </div> <!-- /.sidebar -->
    </aside>
    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="pe-7s-box1"></i>
            </div>
            <div class="header-title">
                <h1>NSU</h1>
                <small><a>@yield('title_head')</a></small>
                <ol class="breadcrumb">
                    @yield('breadcrumb')
                </ol>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            @if ($message = session('success'))
                <div class="row">
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Success:</strong> {{ $message }}
                    </div>
                </div>
            @endif
            @if ($message = session('error'))
                <div class="row">
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Success:</strong> {{ $message }}
                    </div>
                </div>
            @endif
            @yield('content')
        </section> <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
        <strong>Copyright &copy; 2017-2018 <a href="http://ronweb.byethost17.com">RonWeb</a>.</strong> All rights reserved. <i class="fa fa-heart color-green"></i>
    </footer>
</div>
<!-- ./wrapper -->
<!-- Start Core Plugins
=====================================================================-->
<!-- jQuery -->
<script src="{!! asset('backent/plugins/jQuery/jquery-1.12.4.min.js') !!}" type="text/javascript"></script>
<!-- jquery-ui -->
<script src="{!! asset('backent/plugins/jquery-ui-1.12.1/jquery-ui.min.js') !!}" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="{!! asset('backent/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript"></script>
<!-- lobipanel -->
<script src="{!! asset('backent/plugins/lobipanel/lobipanel.min.js') !!}" type="text/javascript"></script>
<!-- Pace js -->
<script src="{!! asset('backent/plugins/pace/pace.min.js') !!}" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="{!! asset('backent/plugins/slimScroll/jquery.slimscroll.min.js') !!}" type="text/javascript"></script>
<!-- FastClick -->
<script src="{!! asset('backent/plugins/fastclick/fastclick.min.js') !!}" type="text/javascript"></script>
<!-- AdminBD frame -->
<!-- Ck editor -->
<script src="{!! asset('/backent/') !!}/plugins/ckeditor/ckeditor.js"></script>
<!-- Ck editor -->
<script src="{!! asset('backent/dist/js/frame.js') !!}" type="text/javascript"></script>
<!-- End Core Plugins
=====================================================================-->
<!-- Start Page Lavel Plugins
=====================================================================-->
<!-- dataTables js -->
<script src="{!! asset('backent/plugins/datatables/dataTables.min.js') !!}" type="text/javascript"></script>
<!-- End Page Lavel Plugins
=====================================================================-->
<!-- Start Theme label Script
=====================================================================-->
<!-- Dashboard js -->
<script src="{!! asset('backent/dist/js/dashboard.js') !!}" type="text/javascript"></script>
<!-- End Theme label Script
=====================================================================-->
<script>
    $(document).ready(function () {

        "use strict"; // Start of use strict

        $('#dataTableExample1').DataTable({
            "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
            "lengthMenu": [[6, 25, 50, -1], [6, 25, 50, "All"]],
            "iDisplayLength": 6,
            "order": [[ 1, "asc" ]]
        });

        $("#dataTableExample2").DataTable({
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            buttons: [
                {extend: 'copy', className: 'btn-sm'},
                {extend: 'csv', title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'excel', title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'print', className: 'btn-sm'}
            ],
            "order": [[ 1, "asc" ]]
        });

    });
</script>

@yield('jscript')
</body>
</html>
