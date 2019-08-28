@extends('dashboard.layout')

@section('title')
    FAQ | Question
@endsection

@section('title_head')
    Alumni FAQ questions
@endsection

@section('nav')
    @include('dashboard.alumni._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('/alumni/faq/') !!}" class="btn btn-success">FAQ</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>FAQ Questionnaires</h4>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>User Name</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Question</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $s = 1 @endphp
                        @foreach($questions as $question)
                        <tr>
                            <td>{!! $s++ !!}</td>
                            <td>
                                @if($question->type == 1)
                                    Alumni
                                @else
                                    Student
                                @endif
                            </td>
                            <td>{!! $question->user_name !!}</td>
                            <td>{!! $question->name !!}</td>
                            <td>{!! $question->subject !!}</td>
                            <td>{!! $question->question !!}</td>
                            <td>{!! $question->created_at !!}</td>
                            <td>
                                <a href="{!! url('alumni/question/delete', $question->id) !!}" title="Delete" onclick="return confirm('Are you sure delete this');"><i class="fa fa-eraser"></i></a>
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