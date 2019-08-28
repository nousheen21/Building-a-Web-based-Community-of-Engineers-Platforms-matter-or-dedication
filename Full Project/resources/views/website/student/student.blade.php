@extends('website.layout')
{{--title--}}
@section('title')
    Our Student
@endsection

@section('being_title')
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="{!! url('/') !!}">Home</a></h6>
                    <h6><span class="page-active">Student List</span></h6>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--Main Content--}}
@section('content')
    <div class="row">
        <!-- Here begin Main Content -->
        <div class="col-md-8">
            <div class="row">

                <div class="col-md-12">
                    @foreach($users as $user)
                    <div class="list-event-item">
                        <div class="box-content-inner clearfix">
                            <div class="list-event-thumb">
                                <a href="{!! url('student/details/'.$user->user_name) !!}">
                                    <img src="{!! asset('image/student/'.$user->image) !!}" alt="">
                                </a>
                            </div>
                            <div class="list-event-header">
                                <div class="view-details"><a href="{!! url('student/contact/'.$user->user_name) !!}" class="lightBtn">Contact</a></div>
                            </div>
                            <h5 class="event-title"><a href="{!! url('student/details/'.$user->user_name) !!}">{!! $user->first_name.' '.$user->last_name !!}</a></h5>
                            <p class="text-justify">{!! $user->degree !!}</p>
                            <p class="text-justify">{!! $user->short_bio !!}</p>
                            <p class="bg-info" style="margin-top: -15px; border-bottom: 1px solid #fff3cd;width: 100%; text-align: right">
                                <a href="{!! url('student/details/'.$user->user_name) !!}"><u>View Details →</u></a>
                            </p>
                        </div> <!-- /.box-content-inner -->
                    </div> <!-- /.list-event-item -->
                    @endforeach
                    <!-- /.list-event-item -->
                </div> <!-- /.col-md-12 -->

            </div> <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="load-more-btn">
                        <a href="#">Click to load more student</a>
                    </div>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->

        </div> <!-- /.col-md-8 -->

        <!-- Here begin Sidebar -->
        <div class="col-md-4">
            <div class="widget-main">
                <div class="widget-main-title">
                    <h4 class="widget-title">New Student</h4>
                </div>
                <div class="widget-inner">
                    @foreach($newUsers as $user)
                    <div class="prof-list-item clearfix">
                        <div class="prof-thumb">
                            <img src="{!! asset('image/student/'.$user->image) !!}" alt="{!! $user->first_name !!}">
                        </div> <!-- /.prof-thumb -->
                        <div class="prof-details">
                            <a href="{!! url('student/details/'.$user->user_name) !!}"><h5 class="prof-name-list">{!! $user->first_name.' '.$user->last_name !!}</h5></a>
                            <p class="small-text">{!! $user->degree !!}</p>
                        </div> <!-- /.prof-details -->
                    </div>
                    @endforeach<!-- /.prof-list-item -->
                </div> <!-- /.widget-inner -->
            </div>
        </div> <!-- /.col-md-4 -->

    </div> <!-- /.row -->
@endsection