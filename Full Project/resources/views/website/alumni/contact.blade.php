@extends('website.layout')
{{--title--}}
@section('title')
    Alumni Contact
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="contact-page-content">
                <div class="contact-heading">
                    <h3>Alumni Contact as <span class="text-primary">{!! $alumni->first_name. ' '.$alumni->last_name !!}</span></h3>
                </div>
                @if( $message = Session::get('success') )
                    <strong class="text-center text-success">{!! $message !!}</strong>
                @endif
                <div class="contact-form clearfix">
                    <form method="post" action="{!! url('alumni/contact/store') !!}">
                        @csrf
                        <input type="hidden" name="alumni_or_student" value="{!! (isset($alumni->user_name))? $alumni->user_name:'' !!}">

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

                        <p class="full-row {{ $errors->has('question') ? ' has-error' : '' }}">
                                <span class="contact-label">
                                    <label for="message">Question:</label>
                                    <span class="small-text">Type Your Question</span>
                                    @if ($errors->has('question'))
                                        <span class="invalid-feedback">
                                    <strong class="text-danger">{{ $errors->first('question') }}</strong>
                                </span>
                                    @endif
                                </span>
                            <textarea name="question" id="question" rows="6">{!! old('question') !!}</textarea>

                        </p>
                        <p class="full-row">
                            <input class="mainBtn" type="submit" name="btn" value="Send Question">
                        </p>
                    </form>
                </div>
            </div>
        </div> <!-- /.col-md-7 -->

    </div>
@endsection