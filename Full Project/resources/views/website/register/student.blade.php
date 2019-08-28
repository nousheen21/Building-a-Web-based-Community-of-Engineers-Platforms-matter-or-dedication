@extends('website.layout')

{{--title--}}
@section('title')
    Student Register
@endsection
{{--Slider--}}

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="contact-page-content">
                <div class="contact-heading">
                    <h3>Student Registration</h3>
                </div>
                <div class="contact-form clearfix">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <p class="full-row {{ $errors->has('user_name') ? ' has-error' : '' }}">
                                <span class="contact-label">
                                    <label for="name-id">User Name:</label>
                                    <span class="small-text">Type Your User Name</span>
                                </span>
                            <input type="text" id="username-id" name="user_name" value="{!! old('user_name') !!}">
                            @if ($errors->has('user_name'))
                                <span class="invalid-feedback">
                                    <br/><strong class="text-danger">{{ $errors->first('user_name') }}</strong>
                                </span>
                            @endif
                        </p>

                        <p class="full-row {{ $errors->has('email') ? ' has-error' : '' }}">
                                <span class="contact-label">
                                    <label for="name-id">Email:</label>
                                    <span class="small-text">Type Your Email Address</span>
                                </span>
                            <input type="text" id="email-id" name="email" value="{!! old('email') !!}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <br/><strong class="text-danger">{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </p>

                        <p class="full-row {{ $errors->has('nsuid') ? ' has-error' : '' }}">
                                <span class="contact-label">
                                    <label for="name-id">University ID:</label>
                                    <span class="small-text">Type Your University ID Number</span>
                                </span>
                            <input type="text" id="nsuid-id" name="nsuid" value="{!! old('nsuid') !!}">
                            @if ($errors->has('nsuid'))
                                <span class="invalid-feedback">
                                    <br/><strong class="text-danger">{{ $errors->first('nsuid') }}</strong>
                                </span>
                            @endif
                        </p>

                        <p class="full-row {{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <span class="contact-label">
                                    <label for="name-id">First Name:</label>
                                    <span class="small-text">Type Your First Name</span>
                                </span>
                            <input type="text" id="name-id" name="first_name" value="{!! old('first_name') !!}">
                            @if ($errors->has('first_name'))
                                <span class="invalid-feedback">
                                    <br/><strong class="text-danger">{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </p>

                        <p class="full-row {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <span class="contact-label">
                                    <label for="surname-id">Last Name:</label>
                                    <span class="small-text">Type Your Last Name</span>
                                </span>
                            <input type="text" id="surname-id" name="last_name" value="{!! old('last_name') !!}">
                            @if ($errors->has('last_name'))
                                <span class="invalid-feedback">
                                    <br/><strong class="text-danger">{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </p>

                        <p class="full-row {{ $errors->has('password') ? ' has-error' : '' }}">
                                <span class="contact-label">
                                    <label for="email-id">Password:</label>
                                    <span class="small-text">Type password</span>
                                </span>
                            <input type="password" id="password-id" name="password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <br/><strong class="text-danger">{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </p>
                        <input type="hidden" name="role" value="2">
                        <input type="hidden" name="year" value="0">
                        <input type="hidden" name="degree" value="null">

                        <p class="full-row">
                                <span class="contact-label">
                                    <label for="email-id">Confirm Password</label>
                                    <span class="small-text">Type Confirmation password</span>
                                </span>
                            <input type="password" id="password_confirmation-id" name="password_confirmation">
                        </p>


                        <p class="full-row">
                            <input class="mainBtn" type="submit" name="btn" value="Submit">
                        </p>
                    </form>
                </div>
            </div>
        </div> <!-- /.col-md-7 -->
    </div>
@endsection