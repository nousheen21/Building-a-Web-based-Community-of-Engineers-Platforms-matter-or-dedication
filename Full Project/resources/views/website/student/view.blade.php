@extends('website.layout')
{{--title--}}
@section('title')
    Our Student | Details
@endsection


@section('being_title')
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="{!! url('/') !!}">Home</a></h6>
                    <h6><a href="{!! url('/student') !!}">Student list</a></h6>
                    <h6><span class="page-active">Student Details</span></h6>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--Main Content--}}
@section('content')
    <div class="row">

        <!-- Here begin Main Content -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="event-container clearfix">
                        <div class="left-event-content">
                            <img src="{!! asset('image/student/'.$user->image) !!}">
                            <div class="event-contact">
                                <h4>Contact Details</h4>
                                <ul>
                                    <li><b>University ID:</b> {!! $user->nsuid !!}</li>
                                    <li><b>Name:</b> {!! $user->first_name. ' '.$user->last_name !!}</li>
                                    <li><b>Email:</b> {!! $user->email !!}</li>
                                    <li><b>Degree:</b> {!! $user->degree !!}</li>
                                    <li><b>Currency :</b> {!! $user->year !!} (Year)</li>
                                </ul>
                            </div>
                        </div> <!-- /.left-event-content -->
                        <div class="right-event-content">
                            <h2 class="event-title text-primary" style="border-bottom: 2px solid #c6c8ca">About</h2>
                            <p class="text-justify">{!! $user->short_bio !!}</p>

                            <h2 class="event-title text-primary" style="border-bottom: 2px solid #c6c8ca">Education & Work</h2>
                            @foreach($user->educationWorks as $work)
                                <p style="margin-top: -5px; border-bottom: 1px solid #fff3cd"><b>High School: </b>{!! $work->high_school !!}</p>
                                <p style="margin-top: -15px; border-bottom: 1px solid #fff3cd"><b>College: </b>{!! $work->college !!}</p>
                                <p style="margin-top: -15px; border-bottom: 1px solid #fff3cd"><b>Undergraduate/graduate degree: </b>{!! $work->degree !!}</p>
                                <p style="margin-top: -15px; border-bottom: 1px solid #fff3cd"><b>Clubs/Institutions: </b>{!! $work->institutions !!}</p>
                                <p style="margin-top: -15px; border-bottom: 1px solid #fff3cd"><b>Job Status: </b>{!! $work->job_status !!}</p>
                                <p style="margin-top: -15px; border-bottom: 1px solid #fff3cd"><b>Designation: </b>{!! $work->designation !!}</p>
                                <p style="margin-top: -15px; border-bottom: 1px solid #fff3cd"><b>Professional Skills: </b>{!! $work->skills !!}</p>
                                <p style="margin-top: -15px; border-bottom: 1px solid #fff3cd"><b>LinkedIn Profile: </b><a href="{!! url($work->linkedin) !!}">Linkedin Profile View</a></p>
                                <h3><u>Projects/Research work: </u></h3>
                                <p class="text-justify">{!! $work->works !!}</p>
                            @endforeach
                        </div> <!-- /.right-event-content -->
                    </div> <!-- /.event-container -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.col-md-8 -->

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="event-container clearfix">
                        <h2 class="event-title text-primary" style="border-bottom: 2px solid #c6c8ca">Story</h2>
                        @foreach($user->story as $story)
                            {!! $story->description !!}
                        @endforeach
                    </div> <!-- /.event-container -->
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="event-container clearfix">
                        <h2 class="event-title text-primary" style="border-bottom: 2px solid #c6c8ca">FAQ</h2>
                        @foreach($user->faqs as $faq)
                            {!! $faq->description !!}
                        @endforeach
                    </div> <!-- /.event-container -->
                </div>
            </div>
        </div>
    </div>
@endsection