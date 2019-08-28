@extends('website.layout')
{{--title--}}
@section('title')
    Contact
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="contact-page-content">
                <div class="contact-heading">
                    <h3>Our Contact Details</h3>
                </div>
                @if( $message = Session::get('success') )
                    <strong class="text-center text-success">{!! $message !!}</strong>
                @endif
                <div class="contact-form clearfix">
                    <form method="post" action="{!! url('contact/store') !!}">
                        @csrf
                        <p class="full-row {{ $errors->has('name') ? ' has-error' : '' }}">
                                <span class="contact-label">
                                    <label for="name-id">Full Name:</label>
                                    <span class="small-text">Put your name here</span>
                                </span>
                            <input type="text" id="name-id" name="name" value="{!! old('name') !!}">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <br/><strong class="text-danger">{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </p>
                        <p class="full-row {{ $errors->has('subject') ? ' has-error' : '' }}">
                                <span class="contact-label">
                                    <label for="surname-id">Subject:</label>
                                    <span class="small-text">Put your subject here</span>
                                </span>
                            <input type="text" id="surname-id" name="subject" value="{!! old('subject') !!}">
                            @if ($errors->has('subject'))
                                <span class="invalid-feedback">
                                    <br/><strong class="text-danger">{{ $errors->first('subject') }}</strong>
                                </span>
                            @endif
                        </p>
                        <p class="full-row {{ $errors->has('email') ? ' has-error' : '' }}">
                                <span class="contact-label">
                                    <label for="email-id">E-mail:</label>
                                    <span class="small-text">Type email address</span>
                                </span>
                            <input type="text" id="email-id" name="email" value="{!! old('email') !!}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <br/><strong class="text-danger">{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </p>
                        <p class="full-row {{ $errors->has('message') ? ' has-error' : '' }}">
                                <span class="contact-label">
                                    <label for="message">Message:</label>
                                    <span class="small-text">Type your message</span>
                                    @if ($errors->has('message'))
                                        <span class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('message') }}</strong>
                                </span>
                                    @endif
                                </span>
                            <textarea name="message" id="message" rows="6">{!! old('message') !!}</textarea>

                        </p>
                        <p class="full-row">
                            <input class="mainBtn" type="submit" name="btn" value="Send Message">
                        </p>
                    </form>
                </div>
            </div>
        </div> <!-- /.col-md-7 -->

    </div>
@endsection