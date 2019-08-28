@extends('dashboard.layout')

@section('title')
    Education | Create
@endsection

@section('title_head')
    Alumni Education Background
@endsection

@section('nav')
    @include('dashboard.alumni._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('alumni/education') !!}" class="btn btn-success">Back</a></li>
@endsection

@section('content')
    <div class="row">
        <!-- Form controls -->

        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Update Form</h4>
                </div>
            </div>
            <div class="panel-body">

                <form action="{{url('alumni/education', $education->id)}}" name="edForm" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="patch" />
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('level') ? ' has-error' : '' }}">
                                <label for="level">Level of Education</label>
                                <select class="form-control" name="level">
                                    <option value="Secondary">Secondary</option>
                                    <option value="Higher Secondary">Higher Secondary</option>
                                    <option value="Bachelor/House">Bachelor/House</option>
                                    <option value="Masters">Masters</option>
                                    <option value="Doctor of Philosophy">Doctor of Philosophy (PhD)</option>
                                </select>
                                @if ($errors->has('level'))
                                    <span class="help-block">
                                        {{ $errors->first('level') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('degree') ? ' has-error' : '' }}">
                                <label for="degree">Exam/Degree Title</label>
                                <input type="text" name="degree" class="form-control" value="{!! old('degree',$education->degree) !!}" placeholder="Exam/Degree Title">
                                @if ($errors->has('degree'))
                                    <span class="help-block">
                                        {{ $errors->first('degree') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group {{ $errors->has('institute') ? ' has-error' : '' }}">
                                <label for="institute">Institute Name</label>
                                <input type="text" name="institute" class="form-control" value="{!! old('institute', $education->institute) !!}" placeholder="School/College/Institute/University Name">
                                @if ($errors->has('institute'))
                                    <span class="help-block">
                                        {{ $errors->first('institute') }}
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('group') ? ' has-error' : '' }}">
                                <label for="group">Major/Group</label>
                                <input type="text" name="group" class="form-control" value="{!! old('group', $education->group) !!}" placeholder="Concentration/ Major/Group">
                                @if ($errors->has('group'))
                                    <span class="help-block">
                                        {{ $errors->first('group') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group {{ $errors->has('result') ? ' has-error' : '' }}">
                                <label for="result">Result</label>
                                <input type="text" name="result" class="form-control" value="{!! old('result', $education->result) !!}" placeholder="Final Resutl">
                                @if ($errors->has('result'))
                                    <span class="help-block">
                                        {{ $errors->first('result') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group {{ $errors->has('scale') ? ' has-error' : '' }}">
                                <label for="scale">Out of Scale</label>
                                <input type="text" name="scale" class="form-control" value="{!! old('scale', $education->scale) !!}" placeholder="Out of Scale">
                                @if ($errors->has('scale'))
                                    <span class="help-block">
                                        {{ $errors->first('scale') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('duration') ? ' has-error' : '' }}">
                                <label for="duration">Duration (Year)</label>
                                <input type="text" name="duration" class="form-control" value="{!! old('duration', $education->duration) !!}" placeholder="Duration of (Year)">
                                @if ($errors->has('duration'))
                                    <span class="help-block">
                                        {{ $errors->first('duration') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('passing_year') ? ' has-error' : '' }}">
                                <label for="passing_year">Years of passing</label>
                                <select class="form-control" name="passing_year">
                                    <?php
                                    $year = date('Y');
                                    $min = $year - 40;
                                    $max = $year;
                                    for ($i = $max; $i >= $min; $i--) {
                                        echo '<option value=' . $i . '>' . $i . '</option>';
                                    }
                                    ?>
                                </select>
                                @if ($errors->has('passing_year'))
                                    <span class="help-block">
                                        {{ $errors->first('passing_year') }}
                                    </span>
                                @endif
                            </div>
                        </div>


                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>

    </div>
    <script>
        document.forms['edForm'].elements['level'].value = '{{ $education->level }}';
        document.forms['edForm'].elements['passing_year'].value = '{{ $education->passing_year }}';
    </script>
@endsection

@section('jscript')
    <script>
        $(document).ready(function() {
            CKEDITOR.replace( 'ckeditor', { height: '200px', startupFocus : true} );
        })
    </script>
@endsection