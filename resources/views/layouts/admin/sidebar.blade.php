<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{Auth::user()->name }}</strong>
                             </span> <span class="text-muted text-xs block">Admin <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a></li>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </div>
                <div class="logo-element">
                    CP
                </div>
            </li>
            <li>
                <a href="{{route('admin.index')}}"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboards</span></a>
            </li>
            <li>
                <a href="{{route('admin.company.index')}}"><i class="fa fa-building-o"></i> <span class="nav-label">Companies</span></a>
            </li>
            <li>
                <a href="{{route('admin.careers.index')}}"><i class="fa fa-briefcase"></i> <span class="nav-label">Careers</span></a>
            </li>
            <li>
                <a href="{{route('admin.recruiter.index')}}"><i class="fa fa-building"></i> <span class="nav-label">Recruiters</span></a>
            </li>
            <li>
                <a href="{{route('admin.external.index')}}"><i class="fa fa-external-link-square"></i> <span class="nav-label">External Sites</span></a>
            </li>
        </ul>
    </div>
</nav>