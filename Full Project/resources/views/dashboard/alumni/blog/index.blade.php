@extends('dashboard.layout')

@section('title')
    Blog
@endsection

@section('title_head')
    Alumni Blog
@endsection

@section('nav')
    @include('dashboard.alumni._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('/alumni/blog/create') !!}" class="btn btn-success">Add New</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Blogs</h4>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $s = 1?>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{!! $s++ !!}</td>
                                <td>{!! $blog->title !!}</td>
                                <td>{!! $blog->description !!}</td>
                                <td>
                                    @if($blog->status == 1)
                                        <a href="{{ url('/alumni/blog/only_me/'.$blog->id) }}" class="btn btn-success btn-xs" title="Published">
                                            Public
                                        </a>
                                    @else
                                        <a href="{{ url('/alumni/blog/public/'.$blog->id) }}" class="btn btn-warning btn-xs" title="Only Me">
                                            Only me
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{!! url('alumni/blog',$blog->id) !!}/edit" title="Details"><i class="fa fa-edit"></i></a> |
                                    <a href="{!! url('alumni/blog/delete', $blog->id) !!}" title="Delete" onclick="return confirm('Are you sure delete this');"><i class="fa fa-eraser"></i></a>
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