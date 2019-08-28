@extends('dashboard.layout')

@section('title')
    Achievement | Create
@endsection

@section('title_head')
    Alumni Achievement
@endsection

@section('nav')
    @include('dashboard.alumni._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('alumni/workshop_job') !!}" class="btn btn-success">Back</a></li>
@endsection

@section('content')
    <div class="row">
        <!-- Form controls -->

        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Achievement Create or Update</h4>
                </div>
            </div>
            <div class="panel-body">

                <form action="{{url('alumni/achievement/store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description">Achievement Description</label>
                                <textarea name="description" id="ckeditor" rows="10" class="form-control" placeholder="Full Description for Workshop and job offer">{!! old('description', (isset($achievement->description))? $achievement->description:'' ) !!}</textarea>
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