@extends('dashboard.layout')

@section('title')
    Current Affiliation | Edit
@endsection

@section('title_head')
    Alumni current affiliation
@endsection

@section('nav')
    @include('dashboard.alumni._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('alumni/current_affiliation') !!}" class="btn btn-success">Back</a></li>
@endsection

@section('content')
    <div class="row">
        <!-- Form controls -->

        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Edit Form</h4>
                </div>
            </div>
            <div class="panel-body">

                <form action="{{ url('alumni/current_affiliation', $affiliation->id)}}" name="affiliationForm" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="patch" />
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('job_type') ? ' has-error' : '' }}">
                                <label for="job_type">Select Job Type</label>
                                <select class="form-control" name="job_type">
                                    <option value="Part time">Part time</option>
                                    <option value="Full time">Full time</option>
                                </select>
                                @if ($errors->has('job_type'))
                                    <span class="help-block">
                                        {{ $errors->first('job_type') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('job_status') ? ' has-error' : '' }}">
                                <label for="job_status">Job Status</label>
                                <input type="text" name="job_status" class="form-control" value="{!! old('job_status', $affiliation->job_status) !!}" placeholder="Enter your job status">
                                @if ($errors->has('job_status'))
                                    <span class="help-block">
                                        {{ $errors->first('job_status') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('organization') ? ' has-error' : '' }}">
                                <label for="organization">Select Company & Organization</label>
                                <select class="form-control" name="organization">
                                    <option value="Company">Company</option>
                                    <option value="Organization">Organization</option>
                                </select>
                                @if ($errors->has('organization'))
                                    <span class="help-block">
                                        {{ $errors->first('organization') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" value="{!! old('name', $affiliation->name) !!}" placeholder="Enter your company and organization name">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        {{ $errors->first('name') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group {{ $errors->has('designation') ? ' has-error' : '' }}">
                                <label for="designation">Designation</label>
                                <input type="text" name="designation" class="form-control" value="{!! old('designation', $affiliation->designation) !!}" placeholder="Enter your job designation">
                                @if ($errors->has('designation'))
                                    <span class="help-block">
                                        {{ $errors->first('designation') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group {{ $errors->has('duration_form') ? ' has-error' : '' }}">
                                <label for="duration_form">Duration From</label>
                                <input type="date" name="duration_form" class="form-control" value="{!! old('duration_form', $affiliation->duration_form) !!}">
                                @if ($errors->has('duration_form'))
                                    <span class="help-block">
                                        {{ $errors->first('duration_form') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group {{ $errors->has('duration_to') ? ' has-error' : '' }}">
                                <label for="duration_to">Duration To</label>
                                <input type="date" name="duration_to" class="form-control" value="{!! old('duration_to', $affiliation->duration_to) !!}">
                                @if ($errors->has('duration_to'))
                                    <span class="help-block">
                                        {{ $errors->first('duration_to') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group {{ $errors->has('current_status') ? ' has-error' : '' }}">
                                <label for="dob">Currently Working</label>
                                <input type="checkbox" name="currently_working" {!! $affiliation->duration_to == 'Continuing' ? 'checked':''!!} value="Continuing" class="checkbox">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>

    </div>
    <script>
        document.forms['affiliationForm'].elements['job_type'].value = '{{ $affiliation->job_type }}';
        document.forms['affiliationForm'].elements['organization'].value = '{{ $affiliation->organization }}';
    </script>
@endsection

@section('jscript')
    <script>

    </script>
@endsection