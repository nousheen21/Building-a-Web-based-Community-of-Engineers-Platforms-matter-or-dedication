@extends('dashboard.layout')

@section('title')
    Admin | Event
@endsection

@section('title_head')
    Admin Events
@endsection

@section('nav')
    @include('dashboard.admin._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('admin/event/create') !!}" class="btn btn-success">Add New</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Events</h4>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Contact</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $s = 1?>
                        @foreach($events as $event)
                            <tr>
                                <td>{!! $s++ !!}</td>
                                <td>{!! $event->title !!}</td>
                                <td>{!! $event->contact !!}</td>
                                <td>{!! $event->start_date !!}</td>
                                <td>{!! $event->end_date !!}</td>
                                <td><img src="{!! asset('image/event/'.$event->image) !!}" width="50"></td>
                                <td>
                                    @if($event->status == 1)
                                        <a href="{{ url('/admin/event/unpublished/'.$event->id) }}" class="btn btn-success btn-xs" title="Published">
                                            Published
                                        </a>
                                    @else
                                        <a href="{{ url('/admin/event/published/'.$event->id) }}" class="btn btn-warning btn-xs" title="Only Me">
                                            Unpublished
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{!! url('admin/event',$event->id) !!}/edit" title="Details"><i class="fa fa-edit"></i></a> |
                                    <a href="{!! url('admin/event/delete', $event->id) !!}" title="Delete" onclick="return confirm('Are you sure delete this');"><i class="fa fa-eraser"></i></a>
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
    <script>


    </script>
@endsection