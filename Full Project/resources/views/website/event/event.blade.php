@extends('website.layout')
{{--title--}}
@section('title')
    Events
@endsection

@section('being_title')
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="{!! url('/') !!}">Home</a></h6>
                    <h6><span class="page-active">Event List</span></h6>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--Main Content--}}
@section('content')
    <div class="row">
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
        </div> <!-- /.col-md-4 -->

        <!-- Here begin Main Content -->
        <div class="col-md-8">
            <div class="row">
                @foreach($events as $event)
                <div class="col-md-6">
                    <div class="grid-event-item">
                        <div class="grid-event-header">
                            <span class="event-date small-text"><i class="fa fa-calendar-o"></i>{!! $event->start_date !!}</span>
                        </div>
                        <div class="box-content-inner">
                            <h5 class="event-title"><a href="{!! url('/event/details', $event->slug) !!}">{!! $event->title !!}</a></h5>
                            <p>
                                {!! strlen($event->description) >= 200 ? substr($event->description, 0, 200): $event->description;  !!}
                                <a href="{!! url('/event/details', $event->slug) !!}">.... View Details &rarr;</a>
                            </p>
                        </div>
                    </div> <!-- /.grid-event-item -->
                </div>
                @endforeach<!-- /.col-md-6 -->
                <!-- /.col-md-6 -->
            </div> <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="load-more-btn">
                        <a href="#">Click here to load more events</a>
                    </div>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->

        </div>

    </div> <!-- /.row -->
@endsection