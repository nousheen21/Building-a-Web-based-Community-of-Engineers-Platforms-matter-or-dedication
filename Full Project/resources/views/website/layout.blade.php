<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en">
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en">
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<!-- Mirrored from demo.esmeth.com/universe/Blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Mar 2018 15:10:20 GMT -->
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="College Education Responsive Template">
    <meta name="author" content="Esmet">
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS Bootstrap & Custom -->
    <link href="{!! asset('front/') !!}/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="{!! asset('front/') !!}/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="{!! asset('front/') !!}/css/animate.css" rel="stylesheet" media="screen">

    <link href="{!! asset('front/') !!}/style.css" rel="stylesheet" media="screen">

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{!! asset('front/') !!}/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{!! asset('front/') !!}/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{!! asset('front/') !!}/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{!! asset('front/') !!}/images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="{!! asset('front/') !!}/images/ico/favicon.ico">

    <!-- JavaScripts -->
    <script src="{!! asset('front/') !!}/js/jquery-1.10.2.min.js"></script>
    <script src="{!! asset('front/') !!}/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="{!! asset('front/') !!}/js/modernizr.js"></script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
    </div>
    <![endif]-->
</head>
<body>

 <!-- Header -->
    @include('website.includes.header')
 <!-- /Header -->

 <!-- slider -->
    @yield('slider')
 <!-- /slider -->

 <!-- slider -->
    @yield('being_title')
 <!-- /slider -->

<div class="container">
    @yield('content')
</div>

 <!-- Footer -->
    @include('website.includes.footer')
 <!-- /Footer -->

<script src="{!! asset('front/') !!}/bootstrap/js/bootstrap.min.js"></script>
<script src="{!! asset('front/') !!}/js/plugins.js"></script>
<script src="{!! asset('front/') !!}/js/custom.js"></script>

</body>

<!-- Mirrored from demo.esmeth.com/universe/Blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Mar 2018 15:11:12 GMT -->
</html>