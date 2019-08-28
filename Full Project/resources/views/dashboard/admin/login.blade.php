<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Login</title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900'
          rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{!! asset('backent/') !!}/login/css/animate.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{!! asset('backent/') !!}/login/css/style.css">
    <link rel="stylesheet" href="{!! asset('backent/') !!}/login/css/jquery.min.js">

</head>

<body>
<div class="container">
    <div class="top">
        <h1 id="title" class="hidden"><span id="logo">Welcome to <span>Admin</span></span></h1>
        <h2 style="text-align: center; color: red">{!! Session::get('error') !!}</h2>
    </div>
    <div class="login-box animated fadeInUp">
        <div class="box-header">
            <h2>Log In</h2>
        </div>
        <form action="{!! route('admin.login') !!}" method="post">
            {{ csrf_field() }}
            <label for="username">Username</label>
            <br/>
            <input type="text" id="username" name="email">
            <br/>
            <label for="password">Password</label>
            <br/>
            <input type="password" id="password" name="password">
            <br/>
            <button type="submit">Sign In</button>
            <br/>
            <a href="#"><p class="small">Forgot your password?</p></a>
        </form>
    </div>
</div>
</body>

<script>
    $(document).ready(function () {
        $('#logo').addClass('animated fadeInDown');
        $("input:text:visible:first").focus();
    });
    $('#username').focus(function () {
        $('label[for="username"]').addClass('selected');
    });
    $('#username').blur(function () {
        $('label[for="username"]').removeClass('selected');
    });
    $('#password').focus(function () {
        $('label[for="password"]').addClass('selected');
    });
    $('#password').blur(function () {
        $('label[for="password"]').removeClass('selected');
    });
</script>

</html>