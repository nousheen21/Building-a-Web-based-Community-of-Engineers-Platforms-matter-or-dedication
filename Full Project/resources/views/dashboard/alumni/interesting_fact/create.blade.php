@extends('dashboard.layout')

@section('title')
    Interesting Fact | Create
@endsection

@section('title_head')
    Alumni Interesting Fact
@endsection

@section('nav')
    @include('dashboard.alumni._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('alumni/interesting') !!}" class="btn btn-success">Back</a></li>
@endsection

@section('content')
    <div class="row">
        <!-- Form controls -->

        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Interesting fact Create or Update</h4>
                </div>
            </div>
            <div class="panel-body">

                <form action="{{url('alumni/interesting/store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description">Interesting Description</label>
                                <textarea name="description" id="ckeditor" rows="10" class="form-control">{!! old('description', (isset($interesting->description))? $interesting->description:'' ) !!}</textarea>
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