@extends('dashboard.layout')

@section('title')
    FAQ
@endsection

@section('title_head')
    Alumni FAQ
@endsection

@section('nav')
    @include('dashboard.alumni._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('/alumni/faq/create') !!}" class="btn btn-success">Add New</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>FAQ's</h4>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>FAQ Descriptin</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{!! old('description', (isset($faq->description))? $faq->description:'' ) !!}</td>
                            <td>
                                <a href="{!! url('alumni/faq/create') !!}" title="Details"><i class="fa fa-edit"></i></a>
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