@extends('dashboard.layout')

@section('title')
    Education Work
@endsection

@section('title_head')
    Student Education & Work
@endsection

@section('nav')
    @include('dashboard.student._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('student/education/create') !!}" class="btn btn-success">Add New</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Education and Work</h4>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
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
                            <td><a href="{!! url(isset($education->linkedin)? $education->linkedin:'') !!}" target="_blank">Linkein</a> </td>
                        </tr>

                        <tr>
                            <th colspan="2"><a href="{!! url('student/education/create') !!}" class="btn btn-primary pull-right">Update</a></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('jscript')
    <script>


    </script>
@endsection