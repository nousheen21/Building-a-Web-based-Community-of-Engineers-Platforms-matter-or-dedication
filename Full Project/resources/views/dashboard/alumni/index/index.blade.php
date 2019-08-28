@extends('dashboard.layout')

@section('title')
    Home
@endsection

@section('css')
    <link href="{!! asset('backent/style.css') !!}" rel="stylesheet" type="text/css"/>
@endsection

@section('title_head')
    Alumni Management System
@endsection

@section('nav')
    @include('dashboard.alumni._nav')
@endsection

@section('breadcrumb')
    <li>
        @if($user->status == 1)
            <a href="{!! url('alumni/only_me',$user->id) !!}" class="btn btn-success">Public</a>
        @else
            <a href="{!! url('alumni/public',$user->id) !!}" class="btn btn-warning">Only Me</a>
        @endif
    </li>
    <li><a href="{!! url('alumni/edit') !!}" class="btn btn-success">Update Profile</a></li>
@endsection

@section('content')
    <!------ Include the above in your HEAD tag ---------->
    <div class="col-lg-12 col-sm-12">
        <div class="card hovercard">
            <div class="card-background">
                <img class="card-bkimg" alt="" src="{!! asset('image/user/'.$user->cover_image) !!}" height="350">
                <!-- http://lorempixel.com/850/280/people/9/ -->
            </div>
            <div class="useravatar">
                <img alt="" src="{!! asset('image/user/'.$user->image) !!}" width="200" height="200">
            </div>
            <div class="card-info"> <span class="card-title">{!! $user->first_name.' '.$user->last_name !!}</span>

            </div>
        </div>
        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-primary" style="height: 80px" href="#tab1" data-toggle="tab"><span class="fa fa-user" aria-hidden="true"></span>
                    <div class="hidden-xs" style="margin-left: -10px">Personal<br>Information</div>
                </button>
            </div>

            <div class="btn-group" role="group">
                <button type="button" id="favorites" style="height: 80px" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="fa fa-cube" aria-hidden="true"></span>
                    <div class="hidden-xs" style="margin-left: -10px">Current<br>Affiliation</div>
                </button>
            </div>

            <div class="btn-group" role="group">
                <button type="button" id="following" style="height: 80px" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="fa fa-history" aria-hidden="true"></span>
                    <div class="hidden-xs" style="margin-left: -10px">My Story</div>
                </button>
            </div>

            <div class="btn-group" role="group">
                <button type="button" id="following" style="height: 80px"  class="btn btn-default" href="#tab4" data-toggle="tab"><span class="fa fa-cubes" aria-hidden="true"></span>
                    <div class="hidden-xs" style="margin-left: -10px">Project &<br>Research</div>
                </button>
            </div>

            <div class="btn-group" role="group">
                <button type="button" id="following" style="height: 80px" class="btn btn-default" href="#tab5" data-toggle="tab"><span class="fa fa-plane" aria-hidden="true"></span>
                    <div class="hidden-xs" style="margin-left: -10px">Travel<br>Diaries</div>
                </button>
            </div>

            <div class="btn-group" role="group">
                <button type="button" id="following" style="height: 80px" class="btn btn-default" href="#tab6" data-toggle="tab"><span class="fa fa-graduation-cap" aria-hidden="true"></span>
                    <div class="hidden-xs" style="margin-left: -10px">Education<br>Background</div>
                </button>
            </div>

            <div class="btn-group" role="group">
                <button type="button" id="following" style="height: 80px" class="btn btn-default" href="#tab7" data-toggle="tab"><span class="fa fa-suitcase" aria-hidden="true"></span>
                    <div class="hidden-xs" style="margin-left: -10px"><p>Workshop &<br>Job offers</p></div>
                </button>
            </div>

            <div class="btn-group" role="group">
                <button type="button" id="following" style="height: 80px" class="btn btn-default" href="#tab8" data-toggle="tab"><span class="fa fa-telegram" aria-hidden="true"></span>
                    <div class="hidden-xs" style="margin-left: -10px">Achievement</div>
                </button>
            </div>


            <div class="btn-group" role="group">
                <button type="button" id="following" style="height: 80px" class="btn btn-default" href="#tab9" data-toggle="tab"><span class="fa fa-music" aria-hidden="true"></span>
                    <div class="hidden-xs" style="margin-left: -10px">Interesting<br>Facts</div>
                </button>
            </div>

            <div class="btn-group" role="group">
                <button type="button" id="following" style="height: 80px" class="btn btn-default" href="#tab10" data-toggle="tab"><span class="fa fa-question-circle" aria-hidden="true"></span>
                    <div class="hidden-xs" style="margin-left: -10px">FAQ</div>
                </button>
            </div>

            <div class="btn-group" role="group">
                <button type="button" id="following" style="height: 80px" class="btn btn-default" href="#tab11" data-toggle="tab"><span class="fa fa-comment" aria-hidden="true"></span>
                    <div class="hidden-xs" style="margin-left: -10px">Blog</div>
                </button>
            </div>
        </div>

        <div class="" style="border: 2px solid #fff; background-color: #fff;">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab1">
                    <table class="table table-bordered table-hover table-active table-responsive">
                        <tr>
                            <th>User Name</th>
                            <td>{!! $user->user_name !!}</td>
                        </tr>

                        <tr>
                            <th>University ID</th>
                            <td>{!! $user->nsuid !!}</td>
                        </tr>

                        <tr>
                            <th>First Name</th>
                            <td>{!! $user->first_name !!}</td>
                        </tr>

                        <tr>
                            <th>Last Name</th>
                            <td>{!! $user->last_name !!}</td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td>{!! $user->email !!}</td>
                        </tr>

                        <tr>
                            <th>Degree</th>
                            <td>{!! $user->degree !!}</td>
                        </tr>

                        <tr>
                            <th>Year</th>
                            <td>{!! $user->year !!}</td>
                        </tr>
                    </table>
                </div>
                <div class="tab-pane fade in" id="tab2">
                    <table class="table table-bordered table-hover table-active table-responsive">
                        <tr>
                            <th>Job Type</th>
                            <th>Job Status</th>
                            <th>Company & Organization</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Duration From</th>
                            <th>Duration To</th>
                        </tr>

                        @foreach($affiliations as $affiliation)
                            <tr>
                                <td>{!! $affiliation->job_type !!}</td>
                                <td>{!! $affiliation->job_status !!}</td>
                                <td>{!! $affiliation->organization !!}</td>
                                <td>{!! $affiliation->name !!}</td>
                                <td>{!! $affiliation->designation !!}</td>
                                <td>{!! $affiliation->duration_form !!}</td>
                                <td>{!! $affiliation->duration_to !!}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="tab-pane fade in" id="tab3" style="padding: 20px;">
                    @foreach($story as $story)
                    {!! $story->description !!}
                    @endforeach
                </div>

                <div class="tab-pane fade in" id="tab4">
                    <table class="table table-bordered table-hover table-active table-responsive">
                        <tr>
                            <th>Type</th>
                            <th>Hardware/Software</th>
                            <th>Name/Title</th>
                            <th>Adviser</th>
                            <th>Individual/Team Name</th>
                            <th>Funded By</th>
                        </tr>
                        @foreach($projects as $project)
                            <tr>
                                <td>{!! $project->type !!}</td>
                                <td>{!! $project->name !!}</td>
                                <td>{!! $project->title !!}</td>
                                <td>{!! $project->adviser !!}</td>
                                <td>{!! $project->team_name !!}</td>
                                <td>{!! $project->funded_by !!}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <div class="tab-pane fade in" id="tab5" style="padding: 20px;">
                    @foreach($travels as $travel)
                        {!! $travel->description !!}
                    @endforeach
                </div>

                <div class="tab-pane fade in" id="tab6">
                    <table class="table table-bordered table-hover table-active table-responsive">
                        <tr>
                            <th>Exam/Degree Title</th>
                            <th>Major/Group</th>
                            <th>Institute Name</th>
                            <th>Result</th>
                            <th>Passing Year</th>
                            <th>Duration</th>
                        </tr>
                        <?php $s = 1?>
                        @foreach($educations as $education)
                            <tr>
                                <td>{!! $education->degree !!}</td>
                                <td>{!! $education->group !!}</td>
                                <td>{!! $education->institute !!}</td>
                                <td>{!! $education->result. ' out of '.$education->scale !!}</td>
                                <td>{!! $education->passing_year !!}</td>
                                <td>{!! $education->duration !!}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <div class="tab-pane fade in" id="tab7" style="padding: 20px;">
                    {!! isset($workshop->description)? $workshop->description:'' !!}
                </div>

                <div class="tab-pane fade in" id="tab8" style="padding: 20px;">
                    {!! isset($achievement->description)? $achievement->description:'' !!}
                </div>

                <div class="tab-pane fade in" id="tab9" style="padding: 20px;">
                    {!! isset($interesting->description)? $interesting->description:'' !!}
                </div>

                <div class="tab-pane fade in" id="tab10" style="padding: 20px;">
                    {!! isset($faq->description)? $faq->description:'' !!}
                </div>

                <div class="tab-pane fade in" id="tab11" style="padding: 20px;">
                    <table class="table table-bordered table-hover table-active table-responsive">
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                        </tr>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{!! $blog->title !!}</td>
                                <td>{!! $blog->description !!}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('jscript')
    <script>
        $(document).ready(function() {
            $(".btn-pref .btn").click(function () {
                $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
                // $(".tab").addClass("active"); // instead of this do the below
                $(this).removeClass("btn-default").addClass("btn-primary");
            });
        });

    </script>
@endsection