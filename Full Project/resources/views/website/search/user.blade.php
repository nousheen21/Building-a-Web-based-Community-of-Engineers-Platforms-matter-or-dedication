@extends('website.layout')
{{--title--}}
@section('title')
    Search | Student | Alumni
@endsection

@section('being_title')
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="{!! url('/') !!}">Home</a></h6>
                    <h6><span class="page-active">Search List</span></h6>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--Main Content--}}
@section('content')
    <div class="col-md-12">
        <div class="row">

            @foreach($users as $user)
                <div class="col-md-3 col-sm-3">
                    <div class="blog-grid-item">
                        <div class="blog-grid-thumb">
                            <a class="cat-blog">
                                @if($user->role == 1)
                                    Alumni
                                @else
                                    Student
                                @endif
                            </a>
                            @if($user->role == 1)
                                <a href="{!! url('alumni/details/'.$user->user_name) !!}">
                                    <img src="{!! asset('image/user/'.$user->image) !!}">
                                </a>
                            @else
                                <a href="{!! url('student/details/'.$user->user_name) !!}">
                                    <img src="{!! asset('image/student/'.$user->image) !!}">
                                </a>
                            @endif
                        </div>
                        <div class="box-content-inner">
                            <h4 class="blog-grid-title">
                                @if($user->role == 1)
                                    <a href="{!! url('alumni/details/'.$user->user_name) !!}">{!! $user->first_name.' '.$user->last_name !!}</a>
                                @else
                                    <a href="{!! url('student/details/'.$user->user_name) !!}">{!! $user->first_name.' '.$user->last_name !!}</a>
                                @endif
                            </h4>
                            <p class="blog-grid-meta small-text">
                                {!! $user->degree !!}
                            </p>
                        </div> <!-- /.box-content-inner -->
                    </div> <!-- /.blog-grid-item -->
                </div>

            @endforeach<!-- /.col-md-6 -->
            <!-- /.col-md-6 -->
        </div> <!-- /.row -->

    </div>
@endsection