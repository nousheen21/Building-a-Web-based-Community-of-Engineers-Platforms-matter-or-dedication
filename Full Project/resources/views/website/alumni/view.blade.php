@extends('website.layout')
{{--title--}}
@section('title')
    Meed Our Alumni | Details
@endsection


@section('being_title')
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="{!! url('/') !!}">Home</a></h6>
                    <h6><a href="{!! url('/alumni') !!}">Alumni list</a></h6>
                    <h6><span class="page-active">Alumni Details</span></h6>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--Main Content--}}
@section('content')
    <div class="row">

        <!-- Here begin Main Content -->
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-12">
                    <div class="event-container clearfix">
                        <div class="left-event-content">
                            <img src="{!! asset('image/user/'.$user->image) !!}">
                            <div class="event-contact">
                                <h4>Contact Details</h4>
                                <ul>
                                    <li><b>University ID:</b> {!! $user->nsuid !!}</li>
                                    <li><b>Name:</b> {!! $user->first_name. ' '.$user->last_name !!}</li>
                                    <li><b>Email:</b> {!! $user->email !!}</li>
                                    <li><b>Degree:</b> {!! $user->degree !!}</li>
                                    <li><b>Year Passing:</b> {!! $user->year !!}</li>
                                </ul>
                            </div>
                        </div> <!-- /.left-event-content -->
                        <div class="right-event-content">
                            <h2 class="event-title text-primary" style="border-bottom: 2px solid #c6c8ca">About</h2>
                            <p class="text-justify">{!! $user->short_bio !!}</p>

                            <h2 class="event-title text-primary" style="border-bottom: 2px solid #c6c8ca">Current
                                Affiliation</h2>
                            @foreach($user->affiliations as $affiliation)
                                <span style="margin-top: -10px"
                                      class="event-time">{!! $affiliation->duration_form.' to '.$affiliation->duration_to !!}</span>
                                <p style="margin-top: -15px"><b>Job Type: </b>{!! $affiliation->job_type !!}</p>
                                <p style="margin-top: -15px"><b>Job Status: </b>{!! $affiliation->job_status !!}</p>
                                <p style="margin-top: -15px"><b>Company &
                                        Organization: </b>{!! $affiliation->organization !!}</p>
                                <p style="margin-top: -15px"><b>Company Name: </b>{!! $affiliation->name !!}</p>
                                <p style="margin-top: -15px; border-bottom: 1px solid #fff3cd">
                                    <b>Designation: </b>{!! $affiliation->designation !!}</p>
                            @endforeach
                        </div> <!-- /.right-event-content -->
                    </div> <!-- /.event-container -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.col-md-8 -->

        <!-- Here begin Sidebar -->
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="event-container clearfix">
                        <div class="left-event-content" style="width: 100%">
                            <h2 class="event-title text-primary" style="border-bottom: 2px solid #c6c8ca; width: 100%;">Project and Research</h2>
                            @foreach($user->projects as $project)
                                <p style="margin-top: -5px"><b>Type: </b>{!! $project->type !!}</p>
                                <p style="margin-top: -10px"><b>Name: </b>{!! $project->name !!}</p>
                                <p style="margin-top: -10px"><b>Title: </b>{!! $project->title !!}</p>
                                <p style="margin-top: -10px"><b>Adviser: </b>{!! $project->adviser !!}</p>
                                <p style="margin-top: -10px"><b>Individual/Team Name: </b>{!! $project->team_name !!}</p>
                                <p style="margin-top: -10px"><b>Funded By: </b>{!! $project->funded_by !!}</p>
                                <p class="bg-info" style="margin-top: -15px; border-bottom: 1px solid #fff3cd;width: 100%; text-align: right">
                                    <a href="#">See more full description</a>
                                </p>
                            @endforeach
                        </div> <!-- /.right-event-content -->
                    </div> <!-- /.event-container -->
                </div>
            </div> <!-- /.row -->
        </div>

        <div class="col-md-5 pull-right">
            <div class="row">
                <div class="col-md-12">
                    <div class="event-container clearfix">
                        <div class="left-event-content" style="width: 100%">
                            <h2 class="event-title text-primary" style="border-bottom: 2px solid #c6c8ca">Education</h2>
                            @foreach($user->educations as $education)
                                <p style="margin-top: -5px"><b>Exam/Degree Title: </b>{!! $education->degree !!}</p>
                                <p style="margin-top: -10px"><b>Major/Group: </b>{!! $education->group !!}</p>
                                <p style="margin-top: -10px"><b>Institute Name: </b>{!! $education->institute !!}</p>
                                @if($education->result)
                                <p style="margin-top: -10px"><b>Result: </b>{!! $education->result. ' out of '.$education->scale !!}</p>
                                @else
                                    <p style="margin-top: -10px;"><b>Result: </b><strong class="text-danger">Result not Inserted</strong> </p>
                                @endif
                                <p style="margin-top: -10px"><b>Passing Year: </b>{!! $education->passing_year !!}</p>
                                <p style="margin-top: -10px; border-bottom: 1px solid #fff3cd;width: 100%;"><b>Duration: </b>{!! $education->duration !!} (y)</p>
                            @endforeach

                        </div> <!-- /.right-event-content -->
                    </div> <!-- /.event-container -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.col-md-8 -->
    </div>


    <div>
        <div class="row">
            <div class="col-md-4">
                <div class="event-container clearfix">
                    <h2 class="event-title text-primary" style="border-bottom: 2px solid #c6c8ca">FAQ</h2>
                    @foreach($user->faqs as $faq)
                        {!! $faq->description !!}
                    @endforeach
                </div> <!-- /.event-container -->
            </div>

            <div class="col-md-8">
                <div class="event-container clearfix">
                    <h2 class="event-title text-primary" style="border-bottom: 2px solid #c6c8ca">Story</h2>
                    @foreach($user->story as $story)
                        {!! $story->description !!}
                    @endforeach
                </div> <!-- /.event-container -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="event-container clearfix">
                    <h2 class="event-title text-primary" style="border-bottom: 2px solid #c6c8ca">Travel Diaries</h2>
                    @foreach($user->travels as $travel)
                        {!! $travel->description !!}
                    @endforeach
                </div> <!-- /.event-container -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="event-container clearfix">
                    <h2 class="event-title text-primary" style="border-bottom: 2px solid #c6c8ca">Achievements</h2>
                    @foreach($user->achievements as $achievement)
                        {!! $achievement->description !!}
                    @endforeach
                </div> <!-- /.event-container -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-7">
                <div class="event-container clearfix">
                    <h2 class="event-title text-primary" style="border-bottom: 2px solid #c6c8ca">Workshop & Jobs</h2>
                    @foreach($user->workshops as $workshop)
                        {!! $workshop->description !!}
                    @endforeach
                </div> <!-- /.event-container -->
            </div>

            <div class="col-md-5">
                <div class="event-container clearfix">
                    <h2 class="event-title text-primary" style="border-bottom: 2px solid #c6c8ca">Blog</h2>
                    @foreach($user->blogs as $blog)
                        <h3 style="margin-top: -5px">{!! $blog->title !!}</h3>
                        <p style="margin-top: -10px; text-align: justify">{!! $blog->description !!}<br></p>
                        <p class="bg-info" style="margin-top: -15px; border-bottom: 1px solid #fff3cd;width: 100%; text-align: right">
                            <a href="#">See more full blogs</a>
                        </p>
                    @endforeach
                </div> <!-- /.event-container -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="event-container clearfix">
                    <h2 class="event-title text-primary" style="border-bottom: 2px solid #c6c8ca">Interesting Facts</h2>
                    @foreach($user->interestings as $interesting)
                        {!! $interesting->description !!}
                    @endforeach
                </div> <!-- /.event-container -->
            </div>
        </div>

        <div class="row">

        </div> <!-- /.row -->
    </div>

        <!-- Here begin Sidebar -->
@endsection