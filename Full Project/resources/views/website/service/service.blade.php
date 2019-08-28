@extends('website.layout')
{{--title--}}
@section('title')
    Service
@endsection


{{--Main Content--}}
@section('content')
    <div class="row">

        <!-- Here begin Main Content -->
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="widget-item">
                        <div>
                            <h2>1. Networking opportunities:</h2>
                            <p>We&#39;ll start with the obvious reason. One of the main purposes of alumni associations
                                is
                                to
                                support a network of former graduates who will, in turn, help to raise the profile of
                                the
                                university. If you&#39;re heading to graduation in a couple of months or have just
                                finished
                                your
                                degree, joining NSU ECE ALUMNI ASSOCIATION is a good way to get a foot (or three) in the
                                door</p>
                            <h2>2. Career building tools</h2>
                            <p>One of the things to remember about alumni associations is that they want you to succeed.
                                Of course, they&#39;re hoping that you&#39;ll use your success to help the association
                                and university,
                                but successful graduates are a university&#39;s best asset. It&#39;s no surprise then
                                that most alumni
                                associations offer a variety of career services. We will emphasize on that too. These
                                can be
                                anything from job fairs to things like resume workshops, job postings, and online
                                resources
                                for job-seekers. And most of these services are offered free of charge to alumni
                                members</p>

                            <h2>3. Give Back</h2>
                            <p>We believe NSU ECE ALUMNI ASSOCIATION will be a great resource for incoming students –
                                many award scholarships (funded by donations from alumni) and the strength of an
                                institution’s alumni association can be a deciding factor for incoming students. We
                                believe
                                the knowledge shared by the Alumni/Alumnae around the world will be an effective and
                                persuasive counseling for interested groups.</p>


                        </div>
                    </div> <!-- /.widget-item -->
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

            <!-- /.widget-main -->
        </div>
    </div>
@endsection