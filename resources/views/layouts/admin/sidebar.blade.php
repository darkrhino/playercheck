<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{Auth::user()->fullName }}</strong>
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
                    PC<i class="fa fa-check"></i>
                </div>
            </li>
            <li>
                <a href="{{route('admin.dashboard.index')}}"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboards</span></a>
            </li>
            <li>
                <a href="{{route('admin.members.index')}}"><i class="fa fa-users"></i> <span class="nav-label">Members</span></a>
            </li>
            <li>
                <a href="{{route('admin.requests.index')}}"><i class="fa fa-rss"></i> <span class="nav-label">Requests</span></a>
            </li>
            <li>
                <a href="{{route('admin.businesses.index')}}"><i class="fa fa-building"></i> <span class="nav-label">Businesses</span></a>
            </li>
        </ul>
    </div>
</nav>