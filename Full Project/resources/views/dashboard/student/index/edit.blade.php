@extends('dashboard.layout')

@section('title')
    Edit Profile
@endsection

@section('title_head')
    Student Update Information
@endsection

@section('nav')
    @include('dashboard.student._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('alumni/dashboard') !!}" class="btn btn-success">Home</a></li>
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

                <form action="{!! url('/student/update', $user->id) !!}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="col-sm-4">
                                <div class="form-group {{ $errors->has('firstName') ? ' has-error' : '' }}">
                                    <label for="fname">User Name</label>
                                    <input type="text" disabled class="form-control"value="{!! $user->user_name !!}">
                                    @if ($errors->has('firstName'))
                                        <span class="help-block">
                                        {{ $errors->first('firstName') }}
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group {{ $errors->has('firstName') ? ' has-error' : '' }}">
                                    <label for="fname">First Name</label>
                                    <input type="text" name="first_name" class="form-control" value="{!! $user->first_name !!}">
                                    @if ($errors->has('firstName'))
                                        <span class="help-block">
                                        {{ $errors->first('firstName') }}
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    <label for="lname">Last Name</label>
                                    <input type="text" name="last_name" class="form-control"value="{!! $user->last_name !!}">
                                    @if ($errors->has('lastName'))
                                        <span class="help-block">
                                        {{ $errors->first('lastName') }}
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="dob">Email</label>
                                    <input type="text" name="email" class="form-control"value="{!! $user->email !!}">
                                    @if ($errors->has('dob'))
                                        <span class="help-block">
                                        {{ $errors->first('dob') }}
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group {{ $errors->has('nsuid') ? ' has-error' : '' }}">
                                    <label for="dob">NSU ID</label>
                                    <input type="text" name="nsuid" class="form-control" value="{!! $user->nsuid !!}">
                                    @if ($errors->has('nsuid'))
                                        <span class="help-block">
                                        {{ $errors->first('nsuid') }}
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group {{ $errors->has('year') ? ' has-error' : '' }}">
                                    <label for="dob">Current Year</label>
                                    <input type="text" name="year" class="form-control"value="{!! $user->year !!}">
                                    @if ($errors->has('year'))
                                        <span class="help-block">
                                        {{ $errors->first('year') }}
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group {{ $errors->has('degree') ? ' has-error' : '' }}">
                                    <label for="dob">Degree</label>
                                    <input type="text" name="degree" class="form-control" value="{!! $user->degree !!}">
                                    @if ($errors->has('dob'))
                                        <span class="help-block">
                                        {{ $errors->first('dob') }}
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group {{ $errors->has('short_bio') ? ' has-error' : '' }}">
                                    <label for="dob">Short Bio</label>
                                    <textarea rows="10" name="short_bio" class="form-control">{!! old('short_bio',$user->short_bio) !!}</textarea>
                                    @if ($errors->has('short_bio'))
                                        <span class="help-block">
                                        {{ $errors->first('short_bio') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-sm-12">
                                <div class="form-group {{ $errors->has('image') ? ' has-error' : '' }}">
                                    <label for="lname">Profile Photo</label>
                                    <img src="{!! asset('image/student/'.$user->image) !!}" class="img-thumbnail img-circle"
                                         width="100%"><br>
                                    <input type="file" name="image" class="form-control" accept="image/*">
                                    @if ($errors->has('lastName'))
                                        <span class="help-block">
                                        {{ $errors->first('lastName') }}
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group {{ $errors->has('cover_image') ? ' has-error' : '' }}">
                                    <label for="lname">Cover Photo</label>
                                    <img src="{!! asset('image/student/'.$user->cover_image) !!}" class="img-thumbnail" width="100%"><br>
                                    <input type="file" name="cover_image" class="form-control" accept="image/*">
                                    @if ($errors->has('lastName'))
                                        <span class="help-block">
                                        {{ $errors->first('lastName') }}
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{!! URL::previous() !!}" class="btn btn-info">Back</a>
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