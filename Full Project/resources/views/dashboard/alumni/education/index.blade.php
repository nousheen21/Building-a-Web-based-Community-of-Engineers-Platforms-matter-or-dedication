@extends('dashboard.layout')

@section('title')
    Education
@endsection

@section('title_head')
    Alumni Educational Background
@endsection

@section('nav')
    @include('dashboard.alumni._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('alumni/education/create') !!}" class="btn btn-success">Add New</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Educational Background</h4>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Exam/Degree Title</th>
                            <th>Major/Group</th>
                            <th>Institute Name</th>
                            <th>Result</th>
                            <th>Passing Year</th>
                            <th>Duration</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $s = 1?>
                        @foreach($educations as $education)
                            <tr>
                                <td>{!! $s++ !!}</td>
                                <td>{!! $education->degree !!}</td>
                                <td>{!! $education->group !!}</td>
                                <td>{!! $education->institute !!}</td>
                                <td>{!! $education->result. ' out of '.$education->scale !!}</td>
                                <td>{!! $education->passing_year !!}</td>
                                <td>{!! $education->duration !!}</td>
                                <td>
                                    <a href="{!! url('alumni/education',$education->id) !!}/edit" title="Details"><i class="fa fa-edit"></i></a> |
                                    <a href="{!! url('alumni/education/delete', $education->id) !!}" title="Delete" onclick="return confirm('Are you sure delete this');"><i class="fa fa-eraser"></i></a>
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