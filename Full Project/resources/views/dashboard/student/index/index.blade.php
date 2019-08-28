@extends('dashboard.layout')

@section('title')
    Home
@endsection

@section('css')
    <link href="{!! asset('backent/style.css') !!}" rel="stylesheet" type="text/css"/>
@endsection

@section('title_head')
    Student Management System
@endsection

@section('nav')
    @include('dashboard.student._nav')
@endsection

@section('breadcrumb')
    <li>
        @if($user->status == 1)
            <a href="{!! url('student/only_me',$user->id) !!}" class="btn btn-success">Public</a>
        @else
            <a href="{!! url('student/public',$user->id) !!}" class="btn btn-warning">Only Me</a>
        @endif
    </li>
    <li><a href="{!! url('/student/edit') !!}" class="btn btn-success">Update Profile</a></li>
@endsection

@section('content')
    <!------ Include the above in your HEAD tag ---------->
    <div class="col-lg-12 col-sm-12">
        <div class="card hovercard">
            <div class="card-background">
                <img class="card-bkimg" alt="" src="{!! asset('image/student/'.$user->cover_image) !!}" height="350">
                <!-- http://lorempixel.com/850/280/people/9/ -->
            </div>
            <div class="useravatar">
                <img alt="" src="{!! asset('image/student/'.$user->image) !!}" width="200" height="200">
            </div>
            <div class="card-info"> <span class="card-title">{!! $user->first_name.' '.$user->last_name !!}</span>

            </div>
        </div>
        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-primary" style="height: 80px" href="#tab1" data-toggle="tab"><span class="fa fa-user" aria-hidden="true"></span>
                    <div class="hidden-xs" style="margin-left: -10px">Personal Information</div>
                </button>
            </div>

            <div class="btn-group" role="group">
                <button type="button" id="following" style="height: 80px" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="fa fa-history" aria-hidden="true"></span>
                    <div class="hidden-xs" style="margin-left: -10px">My Story</div>
                </button>
            </div>

            <div class="btn-group" role="group">
                <button type="button" id="following" style="height: 80px"  class="btn btn-default" href="#tab3" data-toggle="tab"><span class="fa fa-cubes" aria-hidden="true"></span>
                    <div class="hidden-xs" style="margin-left: -10px">Education & Work</div>
                </button>
            </div>

            <div class="btn-group" role="group">
                <button type="button" id="following" style="height: 80px"  class="btn btn-default" href="#tab4" data-toggle="tab"><span class="fa fa-question-circle" aria-hidden="true"></span>
                    <div class="hidden-xs" style="margin-left: -10px">FAQ</div>
                </button>
            </div>

        </div>

        <div class="" style="border: 2px solid #fff; background-color: #fff;">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab1">
                    <table class="table table-bordered table-hover table-active table-responsive">
                        <tr>
                            <th style="width: 200px">User Name</th>
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
                            <td>{!! $user->year !!} (year)</td>
                        </tr>

                        <tr>
                            <th>About</th>
                            <td>{!! $user->short_bio !!}</td>
                        </tr>
                    </table>
                </div>
                <div class="tab-pane fade in" id="tab2" style="padding: 15px">
                    {!! isset($story->description)? $story->description:'' !!}
                </div>
                <div class="tab-pane fade in" id="tab3" style="padding: 20px;">
                    <table class="table table-bordered table-hover table-active table-responsive">
                        <tr>
                            <th style="width: 200px">High School</th>
                            <td>{!! isset($education->high_school)? $education->high_school:'' !!}</td>
                        </tr>

                        <tr>
                            <th>College:</th>
                            <td>{!! isset($education->college)? $education->college:'' !!}</td>
                        </tr>

                        <tr>
                            <th>Undergraduate/graduate degree</th>
                            <td>{!! isset($education->degree)? $education->degree:'' !!}</td>
                        </tr>

                        <tr>
                            <th>Clubs/Institutions</th>
                            <td>{!! isset($education->institutions)? $education->institutions:'' !!}</td>
                        </tr>

                        <tr>
                            <th>Job Status</th>
                            <td>{!! isset($education->job_status)? $education->job_status:'' !!}</td>
                        </tr>

                        <tr>
                            <th>Designation</th>
                            <td>{!! isset($education->designation)? $education->designation:'' !!}</td>
                        </tr>

                        <tr>
                            <th>Professional Skills</th>
                            <td>{!! isset($education->skills)? $education->skills:'' !!}</td>
                        </tr>

                        <tr>
                            <th>Projects/Research work</th>
                            <td>{!! isset($education->works)? $education->works:'' !!}</td>
                        </tr>

                        <tr>
                            <th>LinkedIn Profile</th>
                            <td><a href="{!! url(isset($education->linkedin)? $education->linkedin:'') !!}">Linkein</a> </td>
                        </tr>
                    </table>
                </div>

                <div class="tab-pane fade in" id="tab4" style="padding: 15px">
                    {!! isset($faq->description)? $faq->description:'' !!}
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