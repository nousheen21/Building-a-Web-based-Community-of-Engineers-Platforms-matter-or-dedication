@extends('dashboard.layout')

@section('title')
    My Story | Create
@endsection

@section('title_head')
    Student Stories
@endsection

@section('nav')
    @include('dashboard.student._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('student/story') !!}" class="btn btn-success">Back</a></li>
@endsection

@section('content')
    <div class="row">
        <!-- Form controls -->

        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Story Create or Update</h4>
                </div>
            </div>
            <div class="panel-body">

                <form action="{{url('student/story/store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description">Story Description</label>
                                <textarea name="description" id="ckeditor" rows="10" class="form-control" placeholder="Full Description for Project & Research">{!! old('description', (isset($story->description))? $story->description:'' ) !!}</textarea>
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
            CKEDITOR.replace( 'ckeditor', { height: '300px', startupFocus : true} );
        })
    </script>
@endsection