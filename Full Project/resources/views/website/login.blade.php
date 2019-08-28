<!DOCTYPE html>
<html lang="en">
<head>
    <title>Alumni | Student | Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{!! asset('front/') !!}/login/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('front/') !!}/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{!! asset('front/') !!}/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{!! asset('front/') !!}/login/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('front/') !!}/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{!! asset('front/') !!}/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{!! asset('front/') !!}/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('front/') !!}/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{!! asset('front/') !!}/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('front/') !!}/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="{!! asset('front/') !!}/login/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form method="POST" action="{{ route('login') }}" style="margin-top: -70px">
                @csrf
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
                <div class="text-center well" style="margin-top: -20px">
                    <strong class="text-danger">{{ Session::get('error') }}</strong>
                    <strong class="text-success">{{ Session::get('success') }}</strong>
                </div>
                <span class="login100-form-title p-b-48 {{ $errors->has('email') ? ' validate-form' : '' }}" style="height: 150px">
                    <img src="{!! asset('front/') !!}/images/logo.png" class="bg-info">
					</span>

                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <input class="input100" type="text" name="email" placeholder="Email or User Name">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <span class="focus-input100" data-placeholder=""></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass {{ $errors->has('password') ? ' validate-form' : '' }}">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="password" name="password" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <span class="focus-input100" data-placeholder=""></span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-115" style="margin-top: -40px">
                    <p class="txt1">
                        Don’t have an account?
                    </p>

                    <a class="txt2" href="{!! url('alumni/signup') !!}">
                        Signup as Alumni
                    </a> |

                    <a class="txt2" href="{!! url('student/signup') !!}">
                        Signup as Student
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{!! asset('front/') !!}/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="{!! asset('front/') !!}/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="{!! asset('front/') !!}/login/vendor/bootstrap/js/popper.js"></script>
<script src="{!! asset('front/') !!}/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{!! asset('front/') !!}/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="{!! asset('front/') !!}/login/vendor/daterangepicker/moment.min.js"></script>
<script src="{!! asset('front/') !!}/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="{!! asset('front/') !!}/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="{!! asset('front/') !!}/login/js/main.js"></script>

</body>
</html>