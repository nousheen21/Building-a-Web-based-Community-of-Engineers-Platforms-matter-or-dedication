@extends('dashboard.layout')

@section('title')
    Admin | Event
@endsection

@section('title_head')
    Admin Event Create
@endsection

@section('nav')
    @include('dashboard.admin._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('admin/event') !!}" class="btn btn-success">Back</a></li>
@endsection

@section('content')
    <div class="row">
        <!-- Form controls -->

        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Event Create Form</h4>
                </div>
            </div>
            <div class="panel-body">

                <form action="{{url('admin/event',$event->id)}}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="patch" />
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control"
                                               value="{!! old('title', $event->title) !!}">
                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                        {{ $errors->first('title') }}
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group {{ $errors->has('contact') ? ' has-error' : '' }}">
                                        <label for="contact">Event Contact Details</label>
                                        <input type="text" name="contact" class="form-control"
                                               value="{!! old('contact', $event->contact) !!}">
                                        @if ($errors->has('contact'))
                                            <span class="help-block">
                                        {{ $errors->first('contact') }}
                                    </span>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                        <label for="image">Event Image</label>
                                        <input type="file" name="image" class="form-control" accept="image/*"><br/>
                                        <img src="{!! asset('image/event/'.$event->image) !!}" width="50">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('start_date') ? ' has-error' : '' }}">
                                        <label for="start_date">Start Date</label>
                                        <input type="text" name="start_date" class="form-control date"
                                               value="{!! old('start_date', $event->start_date) !!}">
                                        @if ($errors->has('start_date'))
                                            <span class="help-block">
                                        {{ $errors->first('start_date') }}
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('end_date') ? ' has-error' : '' }}">
                                        <label for="end_date">End Date</label>
                                        <input type="text" name="end_date" class="form-control date"
                                               value="{!! old('end_date', $event->end_date) !!}">
                                        @if ($errors->has('end_date'))
                                            <span class="help-block">
                                        {{ $errors->first('end_date') }}
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description">Event Description</label>
                                <textarea type="text" name="description"
                                          class="form-control ckeditor">{!! old('description', $event->description) !!}</textarea>
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
        $(document).ready(function () {
            CKEDITOR.replace('ckeditor', {height: '200px', startupFocus: true});
        })

        $(".date").datepicker({
            inline: true,
            dateFormat: 'dd-mm-yy'
        });
    </script>
@endsection