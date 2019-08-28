@extends('dashboard.layout')

@section('title')
    Blog | Create
@endsection

@section('title_head')
    Alumni Blog
@endsection

@section('nav')
    @include('dashboard.alumni._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('alumni/blog') !!}" class="btn btn-success">Back</a></li>
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

                <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="funded_by">Blog Title</label>
                                <input type="title" name="title" class="form-control" value="{!! old('title') !!}" placeholder="Type your blog title">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        {{ $errors->first('title') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description">Blog Description</label>
                                <textarea name="description" id="ckeditor" rows="10" class="form-control">{!! old('description') !!}</textarea>
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