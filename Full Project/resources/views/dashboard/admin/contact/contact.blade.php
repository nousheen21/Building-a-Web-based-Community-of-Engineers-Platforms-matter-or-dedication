@extends('dashboard.layout')

@section('title')
    Admin | Contacts
@endsection

@section('title_head')
    User Contact list
@endsection

@section('nav')
    @include('dashboard.admin._nav')
@endsection

@section('breadcrumb')
    <li><a href="{!! url('admin/dashboard/') !!}" class="btn btn-success">Home</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>Contact</h4>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Contact Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $s = 1?>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{!! $s++ !!}</td>
                                <td>{!! $contact->name !!}</td>
                                <td>{!! $contact->email !!}</td>
                                <td>{!! $contact->subject !!}</td>
                                <td>{!! $contact->message !!}</td>
                                <td>{!! $contact->created_at !!}</td>
                                <td>
                                    <a href="{!! url('admin/contact/delete', $contact->id) !!}" title="Delete" onclick="return confirm('Are you sure delete this');"><i class="fa fa-eraser"></i></a>
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