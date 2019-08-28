@extends('dashboard.layout')

@section('title')
    Project & Research
@endsection

@section('title_head')
    Alumni Project & Research
@endsection

@section('nav')
    @include('dashboard.alumni._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('/alumni/project_research/create') !!}" class="btn btn-success">Add New</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Project & Research </h4>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Software/Hardware</th>
                            <th>Name/Title</th>
                            <th>Adviser</th>
                            <th>Team Name</th>
                            <th>Funded By</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $s = 1?>
                        @foreach($projects as $project)
                            <tr>
                                <td>{!! $s++ !!}</td>
                                <td>{!! $project->type !!}</td>
                                <td>{!! $project->name !!}</td>
                                <td>{!! $project->title !!}</td>
                                <td>{!! $project->adviser !!}</td>
                                <td>{!! $project->team_name !!}</td>
                                <td>{!! $project->funded_by !!}</td>
                                <td>
                                    @if($project->status == 1)
                                        <a href="{{ url('/alumni/project_research/only_me/'.$project->id) }}" class="btn btn-success btn-xs" title="Published">
                                            Public
                                        </a>
                                    @else
                                        <a href="{{ url('/alumni/project_research/public/'.$project->id) }}" class="btn btn-warning btn-xs" title="Only Me">
                                            Only me
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{!! url('alumni/project_research',$project->id) !!}/edit" title="Details"><i class="fa fa-edit"></i></a> |
                                    <a href="{!! url('alumni/project_research/delete', $project->id) !!}" title="Delete" onclick="return confirm('Are you sure delete this');"><i class="fa fa-eraser"></i></a>
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