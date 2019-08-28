@extends('website.layout')
{{--title--}}
@section('title')
    Home
@endsection
{{--Slider--}}
@section('slider')
    @include('website.includes.slider')
@endsection

{{--Main Content--}}
@section('content')
    <div class="row">

        <!-- Here begin Main Content -->
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="widget-item">
                        <h2 class="welcome-text">Welcome to NSU ECE Alumni Association:</h2>
                        <div>
                            <p class="text-justify">
                                connecting every ECE Department Alumni/nae of North South University. Alumni associations exist
                                to support the parent organization&#39;s goals, and to strengthen the ties between alumni, the
                                community, and the parent organization.
                            </p>

                            <p class="text-justify">
                                Likewise, NSU ECE Alumni Association will play an important role in helping to shape the future of
                                our University by representing the views of its members and contributing to building an engaged and
                                supportive alumni community.
                            </p>

                            <p class="text-justify">
                                Over the years, North South University, the first private university of our country, has produced
                                many brilliant and creative engineers, who are scattered all around the world and hard to get in
                                touch with.<br/>
                                We believe <b>NSUECEAA</b> will reconnect the Alumni/Alumnae with their Beloved University Again
                            </p>

                        </div>
                    </div> <!-- /.widget-item -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="widget-main">
                        <div class="widget-main-title">
                            <h4 class="widget-title">Events</h4>
                        </div> <!-- /.widget-main-title -->
                        <div class="widget-inner">
                            @foreach($events as $event)
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
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="widget-main">
                        <div class="widget-main-title">
                            <h4 class="widget-title">Our Campus</h4>
                        </div> <!-- /.widget-main-title -->
                        <div class="widget-inner">
                            <div class="our-campus clearfix">
                                <ul>
                                    <li><a href="http://www.northsouth.edu" target="_blank"><img src="{!! asset('front/') !!}/images/campus/nsu.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- /.widget-main -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->

        </div> <!-- /.col-md-8 -->

        <!-- Here begin Sidebar -->
        <div class="col-md-4">

            <div class="widget-main">
                <div class="widget-main-title">
                    <h4 class="widget-title">Top Professors</h4>
                </div>
                <div class="widget-inner">
                    <div class="prof-list-item clearfix">
                        <div class="prof-thumb">
                            <img src="{!! asset('front/') !!}/images/prof/prof1.jpg" alt="Profesor Name">
                        </div> <!-- /.prof-thumb -->
                        <div class="prof-details">
                            <h5 class="prof-name-list">Prof. Betty Hunt</h5>
                            <p class="small-text">Sed ut lectus ac lacus molestie posuere non tincidunt arcu.</p>
                        </div> <!-- /.prof-details -->
                    </div> <!-- /.prof-list-item -->
                    <div class="prof-list-item clearfix">
                        <div class="prof-thumb">
                            <img src="{!! asset('front/') !!}/images/prof/prof2.jpg" alt="Profesor Name">
                        </div> <!-- /.prof-thumb -->
                        <div class="prof-details">
                            <h5 class="prof-name-list">Prof. Victor Johns</h5>
                            <p class="small-text">Nullam sollicitudin libero ut ullamcorper pretium.</p>
                        </div> <!-- /.prof-details -->
                    </div> <!-- /.prof-list-item -->
                    <div class="prof-list-item clearfix">
                        <div class="prof-thumb">
                            <img src="{!! asset('front/') !!}/images/prof/prof3.jpg" alt="Profesor Name">
                        </div> <!-- /.prof-thumb -->
                        <div class="prof-details">
                            <h5 class="prof-name-list">Prof. Charles Conway</h5>
                            <p class="small-text">Integer et nisl tincidunt, euismod orci eget, posuere nunc.</p>
                        </div> <!-- /.prof-details -->
                    </div> <!-- /.prof-list-item -->
                </div> <!-- /.widget-inner -->
            </div> <!-- /.widget-main -->

            <div class="widget-main">
                <div class="widget-main-title">
                    <h4 class="widget-title">Our Gallery</h4>
                </div>
                <div class="widget-inner">
                    <div class="gallery-small-thumbs clearfix">
                        <div class="thumb-small-gallery">
                            <a class="fancybox" rel="gallery1"
                               href="{!! asset('front/') !!}/images/gallery/gallery1.jpg" title="Gallery Tittle One">
                                <img src="{!! asset('front/') !!}/images/gallery/gallery-small-thumb1.jpg" alt=""/>
                            </a>
                        </div>
                        <div class="thumb-small-gallery">
                            <a class="fancybox" rel="gallery1"
                               href="{!! asset('front/') !!}/images/gallery/gallery2.jpg" title="Gallery Tittle One">
                                <img src="{!! asset('front/') !!}/images/gallery/gallery-small-thumb2.jpg" alt=""/>
                            </a>
                        </div>
                        <div class="thumb-small-gallery">
                            <a class="fancybox" rel="gallery1"
                               href="{!! asset('front/') !!}/images/gallery/gallery3.jpg" title="Gallery Tittle One">
                                <img src="{!! asset('front/') !!}/images/gallery/gallery-small-thumb3.jpg" alt=""/>
                            </a>
                        </div>
                        <div class="thumb-small-gallery">
                            <a class="fancybox" rel="gallery1"
                               href="{!! asset('front/') !!}/images/gallery/gallery4.jpg" title="Gallery Tittle One">
                                <img src="{!! asset('front/') !!}/images/gallery/gallery-small-thumb4.jpg" alt=""/>
                            </a>
                        </div>
                        <div class="thumb-small-gallery">
                            <a class="fancybox" rel="gallery1"
                               href="{!! asset('front/') !!}/images/gallery/gallery5.jpg" title="Gallery Tittle One">
                                <img src="{!! asset('front/') !!}/images/gallery/gallery-small-thumb5.jpg" alt=""/>
                            </a>
                        </div>
                        <div class="thumb-small-gallery">
                            <a class="fancybox" rel="gallery1"
                               href="{!! asset('front/') !!}/images/gallery/gallery6.jpg" title="Gallery Tittle One">
                                <img src="{!! asset('front/') !!}/images/gallery/gallery-small-thumb6.jpg" alt=""/>
                            </a>
                        </div>
                        <div class="thumb-small-gallery">
                            <a class="fancybox" rel="gallery1"
                               href="{!! asset('front/') !!}/images/gallery/gallery7.jpg" title="Gallery Tittle One">
                                <img src="{!! asset('front/') !!}/images/gallery/gallery-small-thumb7.jpg" alt=""/>
                            </a>
                        </div>
                        <div class="thumb-small-gallery">
                            <a class="fancybox" rel="gallery1"
                               href="{!! asset('front/') !!}/images/gallery/gallery8.jpg" title="Gallery Tittle One">
                                <img src="{!! asset('front/') !!}/images/gallery/gallery-small-thumb8.jpg" alt=""/>
                            </a>
                        </div>
                    </div> <!-- /.galler-small-thumbs -->
                </div> <!-- /.widget-inner -->
            </div> <!-- /.widget-main -->

        </div>
    </div>
@endsection