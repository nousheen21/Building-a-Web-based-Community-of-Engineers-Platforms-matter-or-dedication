@extends('dashboard.layout')

@section('title')
    Project & Research | Create
@endsection

@section('title_head')
    Alumni Project & Research
@endsection

@section('nav')
    @include('dashboard.alumni._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('alumni/project_research') !!}" class="btn btn-success">Back</a></li>
@endsection

@section('content')
    <div class="row">
        <!-- Form controls -->

        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Create Form</h4>
                </div>
            </div>
            <div class="panel-body">

                <form action="{{route('project_research.store')}}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
                                <label for="district">Select Type</label>
                                <select class="form-control" name="type">
                                    <option value="Project">Project</option>
                                    <option value="Research">Research</option>
                                </select>
                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        {{ $errors->first('type') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name">Hardware/Software Use</label>
                                <input type="text" name="name" class="form-control" value="{!! old('name') !!}" placeholder="Hardware/Software Use">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        {{ $errors->first('name') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="image">Photo</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        {{ $errors->first('image') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title">Name/Title</label>
                                <input type="text" name="title" class="form-control" value="{!! old('title') !!}" placeholder="Type your Project & Research title">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        {{ $errors->first('title') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group {{ $errors->has('adviser') ? ' has-error' : '' }}">
                                <label for="adviser">Adviser</label>
                                <input type="text" name="adviser" class="form-control" value="{!! old('adviser') !!}" placeholder="Name of adviser">
                                @if ($errors->has('adviser'))
                                    <span class="help-block">
                                        {{ $errors->first('adviser') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group {{ $errors->has('team_name') ? ' has-error' : '' }}">
                                <label for="team_name">Individual/Team Name</label>
                                <input type="text" name="team_name" class="form-control" value="{!! old('team_name') !!}" placeholder="Name of Individual or Team Name">
                                @if ($errors->has('team_name'))
                                    <span class="help-block">
                                        {{ $errors->first('team_name') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group {{ $errors->has('funded_by') ? ' has-error' : '' }}">
                                <label for="funded_by">Funded By</label>
                                <input type="text" name="funded_by" class="form-control" value="{!! old('funded_by') !!}" placeholder="The Project and Research funded by">
                                @if ($errors->has('funded_by'))
                                    <span class="help-block">
                                        {{ $errors->first('funded_by') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description">Description</label>
                                <textarea name="description" id="ckeditor" rows="10" class="form-control" placeholder="Full Description for Project & Research">{!! old('description') !!}</textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        {{ $errors->first('description') }}
                                    </span>
                                @endif
                            </div>
                        </div>




                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>

    </div>
@endsection

@section('jscript')
    <script>
        $(document).ready(function() {
            CKEDITOR.replace( 'ckeditor', { height: '200px', startupFocus : true} );
        })
    </script>
@endsection