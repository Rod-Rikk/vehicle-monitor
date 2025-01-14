<div>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                    <div class="nav-profile-image">
                        <img src="{{asset('images/faces/face1.jpg')}}" alt="profile">
                        <span class="login-status online"></span>
                        <!--change to offline or busy as needed-->
                    </div>
                    <div class="nav-profile-text d-flex flex-column">
                        <span class="font-weight-bold mb-2">David Grey. H</span>
                        <span class="text-secondary text-small">Project Manager</span>
                    </div>
                    <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <span class="menu-title">Dashboard</span>
                    <i class="mdi mdi-home menu-icon"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="pages/icons/mdi.html">
                    <span class="menu-title">Customers</span>
                    <i class="mdi mdi-contacts menu-icon"></i>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                    aria-controls="ui-basic">
                    <span class="menu-title">Jobs</span>
                    <i class="menu-arrow"></i>
                    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic"><i class="mdi mdi-crosshairs-gps menu-icon"></i>

                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link"
                                href="pages/ui-features/buttons.html">Current Jobs
                                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                            </a></li>
                        <li class="nav-item"> <a class="nav-link"
                                href="pages/ui-features/buttons.html">Finished
                                Jobs
                                <i class="mdi mdi-briefcase-check
                        menu-icon"></i>
                            </a></li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="vehicles">
                    <span class="menu-title">Vehicles</span>
                    <i class="mdi mdi-truck menu-icon"></i>
                </a>
            </li>

        </ul>
    </nav>
</div>