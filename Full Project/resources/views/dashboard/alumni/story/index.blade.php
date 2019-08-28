@extends('dashboard.layout')

@section('title')
    My Story
@endsection

@section('title_head')
    Alumni Story
@endsection

@section('nav')
    @include('dashboard.alumni._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('/alumni/story/create') !!}" class="btn btn-success">Add New</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>My Story </h4>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Story Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{!! old('description', (isset($story->description))? $story->description:'' ) !!}</td>
                            <td>
                                <a href="{!! url('alumni/story/create') !!}" title="Details"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
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