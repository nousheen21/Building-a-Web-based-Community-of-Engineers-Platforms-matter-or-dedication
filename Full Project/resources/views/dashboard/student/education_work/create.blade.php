@extends('dashboard.layout')

@section('title')
    Education & work | Create
@endsection

@section('title_head')
    Alumni Education and work
@endsection

@section('nav')
    @include('dashboard.student._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('student/education') !!}" class="btn btn-success">Back</a></li>
@endsection

@section('content')
    <div class="row">
        <!-- Form controls -->

        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Education & Work Create Form</h4>
                </div>
            </div>
            <div class="panel-body">
                <form action="{{url('student/education/store')}}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <div class="form-group {{ $errors->has('degree') ? ' has-error' : '' }}">
                                    <label for="high_school">High School</label>
                                    <input type="text" name="high_school" class="form-control"
                                           value="{!! old('high_school', (isset($education->high_school))? $education->high_school:'') !!}">
                                    @if ($errors->has('high_school'))
                                        <span class="help-block">
                                        {{ $errors->first('high_school') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group {{ $errors->has('college') ? ' has-error' : '' }}">
                                    <label for="college">College</label>
                                    <input type="text" name="college" class="form-control"
                                           value="{!! old('college', (isset($education->college))? $education->college:'') !!}">
                                    @if ($errors->has('college'))
                                        <span class="help-block">
                                        {{ $errors->first('college') }}
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group {{ $errors->has('degree') ? ' has-error' : '' }}">
                                    <label for="degree">Undergraduate/graduate degree</label>
                                    <input type="text" name="degree" class="form-control"
                                           value="{!! old('degree', (isset($education->degree))? $education->degree:'') !!}">
                                    @if ($errors->has('degree'))
                                        <span class="help-block">
                                        {{ $errors->first('degree') }}
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group {{ $errors->has('institutions') ? ' has-error' : '' }}">
                                    <label for="institutions">Clubs/Institutions</label>
                                    <input type="text" name="institutions" class="form-control"
                                           value="{!! old('institutions', (isset($education->institutions))? $education->institutions:'') !!}">
                                    @if ($errors->has('institutions'))
                                        <span class="help-block">
                                        {{ $errors->first('institutions') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="col-sm-12">
                                <div class="form-group {{ $errors->has('job_status') ? ' has-error' : '' }}">
                                    <label for="degree">Job Status</label>
                                    <input type="text" name="job_status" class="form-control"
                                           value="{!! old('job_status', (isset($education->job_status))? $education->job_status:'') !!}">
                                    @if ($errors->has('job_status'))
                                        <span class="help-block">
                                        {{ $errors->first('job_status') }}
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group {{ $errors->has('designation') ? ' has-error' : '' }}">
                                    <label for="degree">Designation</label>
                                    <input type="text" name="designation" class="form-control"
                                           value="{!! old('designation', (isset($education->designation))? $education->designation:'') !!}">
                                    @if ($errors->has('designation'))
                                        <span class="help-block">
                                        {{ $errors->first('designation') }}
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group {{ $errors->has('skills') ? ' has-error' : '' }}">
                                    <label for="degree">Professional Skills</label>
                                    <input type="text" name="skills" class="form-control"
                                           value="{!! old('skills', (isset($education->skills))? $education->skills:'') !!}">
                                    @if ($errors->has('skills'))
                                        <span class="help-block">
                                        {{ $errors->first('skills') }}
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group {{ $errors->has('linkedin') ? ' has-error' : '' }}">
                                    <label for="degree">LinkedIn Profile</label>
                                    <input type="text" name="linkedin" class="form-control"
                                           value="{!! old('linkedin', (isset($education->linkedin))? $education->linkedin:'') !!}">
                                    @if ($errors->has('linkedin'))
                                        <span class="help-block">
                                        {{ $errors->first('linkedin') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="works">Projects/Research work</label>
                                <textarea type="text" name="works"
                                          class="form-control ckeditor">{!! old('works', isset($education->works))? $education->works:'' !!}</textarea>
                                @if ($errors->has('works'))
                                    <span class="help-block">
                                        {{ $errors->first('works') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br/>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('jscript')
    <script>
        $(document).ready(function () {
            CKEDITOR.replace('ckeditor', {height: '200px', startupFocus: true});
        })
    </script>
@endsection