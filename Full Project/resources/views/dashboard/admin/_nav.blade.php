<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{!! Request::is('admin/dashboard') ? 'active' : '' !!}">
        <a href="{!! url('admin/dashboard') !!}"><i class="ti-home"></i> <span>Admin Dashboard</span>
            <span class="pull-right-container">
                <span class="label label-success pull-right">v.1</span>
            </span>
        </a>
    </li>
    <li class="{!! Request::is('admin/event*') ? 'active' : '' !!}"><a href="{!! url('/admin/event') !!}"><i class="fa fa-cube"></i><span>Events</span></a></li>
    <li class="{!! Request::is('admin/contact*') ? 'active' : '' !!}"><a href="{!! url('/admin/contact') !!}"><i class="fa fa-send"></i><span>User Contact List</span></a></li>
</ul>