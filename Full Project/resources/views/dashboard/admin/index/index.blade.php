@extends('dashboard.admin.layout')

@section('title')
    Admin Home
@endsection

@section('title_head')
    Admin Management System
@endsection

@section('nav')
    @include('dashboard.admin._nav')
@endsection

@section('breadcrumb')
    <li>Hello Admin</li>
@endsection

@section('content')
    <div class="row">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Alumni list </h4>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>University ID</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $s = 1?>
                        @foreach($alumnis as $alumni)
                            <tr>
                                <td>{!! $alumni->id !!}</td>
                                <td>{!! $alumni->user_name !!}</td>
                                <td>{!! $alumni->first_name !!}</td>
                                <td>{!! $alumni->last_name !!}</td>
                                <td>{!! $alumni->nsuid !!}</td>
                                <td>{!! $alumni->email !!}</td>
                                <td>
                                    <a href="{!! url('alumni/',$alumni->id) !!}/edit" title="Details"><i
                                                class="fa fa-edit"></i></a> |
                                    <a href="{!! url('admin/user/delete',$alumni->id) !!}" title="Delete"
                                       onclick="return confirm('Are you sure delete this');"><i
                                                class="fa fa-eraser"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Student list </h4>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>University ID</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $s = 1?>
                        @foreach($students as $student)
                            <tr>
                                <td>{!! $student->id !!}</td>
                                <td>{!! $student->user_name !!}</td>
                                <td>{!! $student->first_name !!}</td>
                                <td>{!! $student->last_name !!}</td>
                                <td>{!! $student->nsuid !!}</td>
                                <td>{!! $student->email !!}</td>
                                <td>
                                    <a href="{!! url('alumni/',$student->id) !!}/edit" title="Details"><i
                                                class="fa fa-edit"></i></a> |
                                    <a href="{!! url('admin/user/delete',$student->id) !!}" title="Delete"
                                       onclick="return confirm('Are you sure delete this');"><i
                                                class="fa fa-eraser"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('jscript')

@endsection