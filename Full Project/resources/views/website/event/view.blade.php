@extends('website.layout')
{{--title--}}
@section('title')
    Event | Details
@endsection


@section('being_title')
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="{!! url('/') !!}">Home</a></h6>
                    <h6><a href="{!! url('/event') !!}">Event list</a></h6>
                    <h6><span class="page-active">{!! $event->title !!}</span></h6>
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
                    <div class="event-container clearfix">
                        <div class="left-event-content">
                            <img src="{!! asset('image/event/'.$event->image) !!}" alt="">
                            <div class="event-contact">
                                <h4>Contact Details</h4>
                                <p class="text-justify" style="width: 230px">
                                    {!! $event->contact !!}
                                </p>
                            </div>
                        </div> <!-- /.left-event-content -->
                        <div class="right-event-content">
                            <h2 class="event-title">{!! $event->title !!}</h2>
                            <span class="event-time">{!! $event->start_date. ' to '.$event->end_date !!}</span>
                            {!! $event->description !!}
                        </div> <!-- /.right-event-content -->
                    </div> <!-- /.event-container -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.col-md-8 -->

        <!-- Here begin Sidebar -->
        <div class="col-md-4">

            <div class="widget-main">
                <div class="widget-main-title">
                    <h4 class="widget-title">New Events</h4>
                </div> <!-- /.widget-main-title -->
                <div class="widget-inner">
                    @foreach($newEvents as $event)
                        <div class="blog-list-post clearfix">
                            <div class="blog-list-thumb">
                                <a href="{!! url('/event/details', $event->slug) !!}"><img src="{!! asset('image/event/'.$event->image) !!}" alt=""></a>
                            </div>
                            <div class="blog-list-details">
                                <h5 class="blog-list-title"><a href="{!! url('/event/details', $event->slug) !!}">{!! $event->title !!}</a></h5>
                                <p class="blog-list-meta small-text"><span><a href="{!! url('/event/details', $event->slug) !!}">{!! $event->start_date !!}</a></span> with <span><a href="{!! url('/event/details', $event->slug) !!}">Contact Us: {!! $event->contact !!}</a></span></p>
                            </div>
                        </div>
                @endforeach<!-- /.blog-list-post -->
                </div> <!-- /.widget-inner -->
            </div> <!-- /.widget-main -->

            <!-- /.widget-main -->

        </div> <!-- /.col-md-4 -->

    </div>
@endsection