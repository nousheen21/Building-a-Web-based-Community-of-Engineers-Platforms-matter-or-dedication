@extends('dashboard.layout')

@section('title')
    Current Affiliation
@endsection

@section('title_head')
    Alumni current affiliation
@endsection

@section('nav')
    @include('dashboard.alumni._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('/alumni/current_affiliation/create') !!}" class="btn btn-success">Add New</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Affiliations </h4>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Job Type</th>
                            <th>Job Status</th>
                            <th>Company & Organization</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Duration From</th>
                            <th>Duration To</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $s = 1?>
                            @foreach($affiliations as $affiliation)
                                <tr>
                                    <td>{!! $s++ !!}</td>
                                    <td>{!! $affiliation->job_type !!}</td>
                                    <td>{!! $affiliation->job_status !!}</td>
                                    <td>{!! $affiliation->organization !!}</td>
                                    <td>{!! $affiliation->name !!}</td>
                                    <td>{!! $affiliation->designation !!}</td>
                                    <td>{!! $affiliation->duration_form !!}</td>
                                    <td>{!! $affiliation->duration_to !!}</td>
                                    <td>
                                        <a href="{!! url('alumni/current_affiliation',$affiliation->id) !!}/edit" title="Details"><i class="fa fa-edit"></i></a> |
                                        <a href="{!! url('alumni/affiliation/delete',$affiliation->id) !!}" title="Delete" onclick="return confirm('Are you sure delete this');"><i class="fa fa-eraser"></i></a>
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