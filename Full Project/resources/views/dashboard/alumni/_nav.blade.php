<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{!! Request::is('alumni/dashboard') ? 'active' : '' !!}">
        <a href="{!! url('home') !!}"><i class="ti-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
                <span class="label label-success pull-right">v.1</span>
            </span>
        </a>
    </li>
    <li class="{!! Request::is('alumni/current_affiliation*') ? 'active' : '' !!}"><a href="{!! url('/alumni/current_affiliation') !!}"><i class="fa fa-cube"></i><span>Current Affiliation</span></a></li>
    <li class="{!! Request::is('alumni/my_story*') ? 'active' : '' !!}"><a href="{!! url('/alumni/my_story') !!}"><i class="fa fa-history"></i><span>My Story</span></a></li>
    <li class="{!! Request::is('alumni/project_research*') ? 'active' : '' !!}"><a href="{!! url('/alumni/project_research') !!}"><i class="fa fa-cubes"></i><span>Project & Research</span></a></li>
    <li class="{!! Request::is('alumni/travel*') ? 'active' : '' !!}"><a href="{!! url('/alumni/travel') !!}"><i class="fa fa-plane"></i><span>Travel Diaries</span></a></li>
    <li class="{!! Request::is('alumni/education*') ? 'active' : '' !!}"><a href="{!! url('/alumni/education') !!}"><i class="fa fa-graduation-cap"></i><span>Education Background</span></a></li>
    <li class="{!! Request::is('alumni/workshop_job*') ? 'active' : '' !!}"><a href="{!! url('/alumni/workshop_job') !!}"><i class="fa fa-suitcase"></i><span>Workshop & Job offers</span></a></li>
    <li class="{!! Request::is('alumni/achievement*') ? 'active' : '' !!}"><a href="{!! url('/alumni/achievement') !!}"><i class="fa fa-telegram"></i><span>Achievements</span></a></li>
    <li class="{!! Request::is('alumni/interesting*') ? 'active' : '' !!}"><a href="{!! url('/alumni/interesting') !!}"><i class="fa fa-music"></i><span>Interesting Facts</span></a></li>

    <li class="treeview {!! Request::is('alumni/faq*') ? 'active' : '' !!}">
        <a href="#">
            <i class="fa fa-question-circle"></i> <span>FAQ's</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{!! Request::is('alumni/faq') ? 'active' : '' !!}"><a href="{!! url('/alumni/faq') !!}"><span>FAQ</span></a></li>
            <li class="{!! Request::is('alumni/faq/question') ? 'active' : '' !!}"><a href="{!! url('/alumni/faq/question') !!}"><span>Questions</span></a></li>
        </ul>
    </li>



    <li class="{!! Request::is('alumni/blog*') ? 'active' : '' !!}"><a href="{!! url('/alumni/blog') !!}"><i class="fa fa-comment"></i><span>Blog</span></a></li>
    <li><a href="{!! url('/') !!}"><i class="fa fa-home"></i><span>Return Home</span></a></li>
</ul>