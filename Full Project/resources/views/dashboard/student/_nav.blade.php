<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{!! Request::is('student/dashboard') ? 'active' : '' !!}">
        <a href="{!! url('home') !!}"><i class="ti-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
                <span class="label label-success pull-right">v.1</span>
            </span>
        </a>
    </li>
    <li class="{!! Request::is('student/story*') ? 'active' : '' !!}"><a href="{!! url('student/story') !!}"><i class="fa fa-history"></i><span>My Story</span></a></li>
    <li class="{!! Request::is('student/education*') ? 'active' : '' !!}"><a href="{!! url('student/education') !!}"><i class="fa fa-cube" aria-hidden="true"></i><span>Education & Work</span></a></li>

    <li class="treeview {!! Request::is('student/faq*') ? 'active' : '' !!}">
        <a href="#">
            <i class="fa fa-question-circle"></i> <span>FAQ's</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{!! Request::is('student/faq') ? 'active' : '' !!}"><a href="{!! url('/student/faq') !!}"><span>FAQ</span></a></li>
            <li class="{!! Request::is('student/faq/question') ? 'active' : '' !!}"><a href="{!! url('/student/faq/question') !!}"><span>Questions</span></a></li>
        </ul>
    </li>

    <li><a href="{!! url('/') !!}"><i class="fa fa-home"></i><span>Return Home</span></a></li>
</ul>