<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link href="https://fonts.googleapis.com/css?family=HelveticaNeue:200,600" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="76x76" href="/resources/my_post.jpg">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ $title }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    {{-- <script src="https://kit.fontawesome.com/6116065486.js" crossorigin="anonymous"></script> --}}
    <!-- CSS Files -->
    {{-- <link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet" /> --}}
    {{-- <link href="{{ asset ('css/light-bootstrap-dashboard.css?v=2.0.0') }}" rel="stylesheet" /> --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=HelveticaNeue" rel="stylesheet"> --}}
    <link href="{{ asset('fonts/Segoe/Segoe-UI.ttf')}}">
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/ins2wgm.css">
    {{-- <script src="https://kit.fontawesome.com/6116065486.js" crossorigin="anonymous"></script> --}}

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <!-- End layout styles -->

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

</head>

<body>

    <div class="container-scroller">
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo"></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg"
                        alt="logo"></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <div class="search-field d-none d-md-block">
                    <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <i class="input-group-text border-0 mdi mdi-magnify"></i>
                            </div>
                            <input type="text" class="form-control bg-transparent border-0"
                                placeholder="Search projects">
                        </div>
                    </form>
                </div>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
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
                    @if (Auth::User()->name == 'Admin' | Auth::User()->name == 'Manager')
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <span class="menu-title">Dashboard</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>

                    @endif

                    @if (Auth::User()->name == 'Admin' | Auth::User()->name == 'Manager')

                    <li class="nav-item">
                        <a class="nav-link" href="/customers">
                            <span class="menu-title text-uppercase">Customers</span>
                            <i class="mdi mdi-contacts menu-icon"></i>
                        </a>
                    </li>
                    @endif


                    @if (Auth::User()->id == '1' | Auth::User()->id == '2' | Auth::User()->id == '3')
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title text-uppercase">Jobs</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-basic"><i class="mdi mdi-crosshairs-gps menu-icon"></i>

                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item text-uppercase"> <a class="nav-link" href="/jobs">Current Jobs
                                        <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                                    </a></li>
                                <li class="nav-item text-uppercase"> <a class="nav-link" href="/finished-jobs">Finished
                                        Jobs
                                        <i class="mdi mdi-briefcase-check
                                menu-icon"></i>
                                    </a></li>

                            </ul>
                        </div>
                    </li>
                    @endif

                    @if (Auth::User()->name =='Admin' | Auth::User()->name == 'Manager')
                    <li class="nav-item">
                        <a class="nav-link" href="vehicles">
                            <span class="menu-title text-uppercase">Vehicles</span>
                            <i class="mdi mdi-truck menu-icon"></i>
                        </a>
                    </li>
                    @endif

                    @if (Auth::User()->name =='Admin')
                    <li class="nav-item">
                        <a class="nav-link" href="/users">
                            <span class="menu-title text-uppercase">User management</span>
                            <i class="mdi mdi-account-outline menu-icon"></i>
                        </a>
                    </li>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link" href=" {{route('roles.index')}} ">
                            <span class="menu-title text-uppercase">Roles</span>
                            <i class="mdi mdi-account-key menu-icon"></i>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- partial -->
            <div class="main-panel">

                @yield('content')
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a
                                href="https://www.bootstrapdash.com/" target="_blank">Skinnyman And Sons.</a>. All
                            rights
                            reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Powered By
                            <i class="mdi mdi-weather-lightning text-warning mdi-24px">DreamJunkies</i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->

        </div>


    </div>
    {{-- </div> --}}



    <!-- plugins:js -->
    <script src="{{ asset('vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('vendors/chart.js/Chart.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('vendors/off-canvas.js')}}"></script>
    <script src="{{ asset('vendors/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('vendors/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('vendors/dashboard.js')}}"></script>
    <script src="{{ asset('vendors/todolist.js')}}"></script>
    <!-- End custom js for this page -->


</body>





</html>