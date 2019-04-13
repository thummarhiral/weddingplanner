<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ url('admin') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{ url('admin/users') }}"><i class="fa fa-users fa-fw"></i> Users</a>
            </li>
            <li>
                <a href="{{ url('admin/events') }}"><i class="fa fa-users fa-fw"></i> Events</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> Category Lists<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                         <a href="{{ url('admin/category') }}"><i class="fa fa-users fa-fw"></i> Categories</a>
                    </li>
                    <li>
                         <a href="{{ url('admin/sub-category') }}"><i class="fa fa-users fa-fw"></i> Sub Categories</a>
                    </li>
                </ul>
            </li>
            
            <!-- <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('flot') }}">Flot Charts</a>
                    </li>
                    <li>
                <a href="{{url('morris')}}"><i class="fa fa-table fa-fw"></i> Tables</a>
        
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ url('admin/Tables') }}"><i class="fa fa-table fa-fw"></i> Tables</a>
            </li>
            <li>
                <a href="{{url('forms')}}"><i class="fa fa-edit fa-fw"></i> Forms</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('panels-wells')}}">Panels and Wells</a>
                    </li>
                    <li>
                        <a href="{{ url('buttons') }}">Buttons</a>
                    </li>
                    <li>
                        <a href="{{url('notifications')}}">Notifications</a>
                    </li>
                    <li>
                        <a href="{{url('typography')}}">Typography</a>
                    </li>
                    <li>
                        <a href="{{url('icons')}}"> Icons</a>
                    </li>
                    <li>
                        <a href="{{url('grid')}}">Grid</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('blank')}}">Blank Page</a>
                    </li>
                    <li>
                        <a href="{{url('login')}}">Login Page</a>
                    </li>
                </ul>
            </li> -->
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>