<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Vehicle Monitor') }} - {{ config('app.subtitle') }}</title>
    <link rel="icon" type="image/png" href="{{asset('images/logo-mini.svg')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=HelveticaNeue" rel="stylesheet"> --}}
    {{-- <script src="https://kit.fontawesome.com/6116065486.js" crossorigin="anonymous"></script> --}}
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <!-- End layout styles -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Vehicle Monitor') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endguest
                    </ul>

                </div>
            </div>
        </nav>
        <!-- Show sidebar if user is authenticated -->
        @auth
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
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <span class="menu-title">Jobs</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                        </a>
                        <div class="collapse" id="ui-basic"><i class="mdi mdi-crosshairs-gps menu-icon"></i>

                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Current
                                        Jobs
                                        <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Finished
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
            @endauth


            {{-- <main>
                @yield('content')
            </main> 
        </div> 
         --}}

        </div>

        <main>
            @yield('content')
        </main>


</body>

<!-- Footer -->
<footer class="sticky-footer bg-grey">

    <div class="container my-auto fixed-bottom">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; DreamJunkies.</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</html>
