@extends('layouts.app')

@section('content')
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link href="https://fonts.googleapis.com/css?family=HelveticaNeue:200,600" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="76x76" href="/resources/my_post.jpg">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Home</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <script src="https://kit.fontawesome.com/6116065486.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet" />
    {{-- <link href="{{ asset ('css/light-bootstrap-dashboard.css?v=2.0.0') }}" rel="stylesheet" /> --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=HelveticaNeue" rel="stylesheet">
    <link href="{{ asset('fonts/Segoe/Segoe-UI.ttf')}}">
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

</head>

<body>

    <div class="wrapper">
        <div class="row">


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
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row" id="proBanner">
                    </div>
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                                <i class="mdi mdi-home"></i>
                            </span> Dashboard </h3>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span></span>Overview <i
                                        class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-danger card-img-holder text-white">
                                <div class="card-body">
                                    <img src="{{asset('images/dashboard/circle.svg')}}" class="card-img-absolute"
                                        alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Total Jobs <i
                                            class="mdi mdi-chart-line mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5">$ 15,0000</h2>
                                    <h6 class="card-text">Increased by 60%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-info card-img-holder text-white">
                                <div class="card-body">
                                    <img src="{{asset('images/dashboard/circle.svg')}}" class="card-img-absolute"
                                        alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Finished Jobs <i
                                            class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5">45,6334</h2>
                                    <h6 class="card-text">Decreased by 10%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-success card-img-holder text-white">
                                <div class="card-body">
                                    <img src="{{asset('images/dashboard/circle.svg')}}" class="card-img-absolute"
                                        alt="circle-image" />
                                    <h4 class="font-weight-normal mb-3">Number of vehicles <i
                                            class="mdi mdi-diamond mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5">95,5741</h2>
                                    <h6 class="card-text">Increased by 5%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                                        <div id="visit-sale-chart-legend"
                                            class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                                    </div>
                                    <canvas id="visit-sale-chart" class="mt-4"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Traffic Sources</h4>
                                    <canvas id="traffic-chart"></canvas>
                                    <div id="traffic-chart-legend"
                                        class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Recent Tickets</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th> Assignee </th>
                                                    <th> Subject </th>
                                                    <th> Status </th>
                                                    <th> Last Update </th>
                                                    <th> Tracking ID </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/faces/face1.jpg" class="mr-2"
                                                            alt="image"> David
                                                        Grey </td>
                                                    <td> Fund is not recieved </td>
                                                    <td>
                                                        <label class="badge badge-gradient-success">DONE</label>
                                                    </td>
                                                    <td> Dec 5, 2017 </td>
                                                    <td> WD-12345 </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/faces/face2.jpg" class="mr-2"
                                                            alt="image">
                                                        Stella Johnson </td>
                                                    <td> High loading time </td>
                                                    <td>
                                                        <label class="badge badge-gradient-warning">PROGRESS</label>
                                                    </td>
                                                    <td> Dec 12, 2017 </td>
                                                    <td> WD-12346 </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/faces/face3.jpg" class="mr-2"
                                                            alt="image">
                                                        Marina Michel </td>
                                                    <td> Website down for one week </td>
                                                    <td>
                                                        <label class="badge badge-gradient-info">ON HOLD</label>
                                                    </td>
                                                    <td> Dec 16, 2017 </td>
                                                    <td> WD-12347 </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img src="assets/images/faces/face4.jpg" class="mr-2"
                                                            alt="image"> John
                                                        Doe </td>
                                                    <td> Loosing control on server </td>
                                                    <td>
                                                        <label class="badge badge-gradient-danger">REJECTED</label>
                                                    </td>
                                                    <td> Dec 3, 2017 </td>
                                                    <td> WD-12348 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Recent Updates</h4>
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center mr-4 text-muted font-weight-light">
                                            <i class="mdi mdi-account-outline icon-sm mr-2"></i>
                                            <span>jack Menqu</span>
                                        </div>
                                        <div class="d-flex align-items-center text-muted font-weight-light">
                                            <i class="mdi mdi-clock icon-sm mr-2"></i>
                                            <span>October 3rd, 2018</span>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6 pr-1">
                                            <img src="assets/images/dashboard/img_1.jpg"
                                                class="mb-2 mw-100 w-100 rounded" alt="image">
                                            <img src="assets/images/dashboard/img_4.jpg" class="mw-100 w-100 rounded"
                                                alt="image">
                                        </div>
                                        <div class="col-6 pl-1">
                                            <img src="assets/images/dashboard/img_2.jpg"
                                                class="mb-2 mw-100 w-100 rounded" alt="image">
                                            <img src="assets/images/dashboard/img_3.jpg" class="mw-100 w-100 rounded"
                                                alt="image">
                                        </div>
                                    </div>
                                    <div class="d-flex mt-5 align-items-top">
                                        <img src="assets/images/faces/face3.jpg" class="img-sm rounded-circle mr-3"
                                            alt="image">
                                        <div class="mb-0 flex-grow">
                                            <h5 class="mr-2 mb-2">School Website - Authentication Module.</h5>
                                            <p class="mb-0 font-weight-light">It is a long established fact that a
                                                reader will
                                                be distracted by the readable content of a page.</p>
                                        </div>
                                        <div class="ml-auto">
                                            <i class="mdi mdi-heart-outline text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Project Status</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Name </th>
                                                    <th> Due Date </th>
                                                    <th> Progress </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> Herman Beck </td>
                                                    <td> May 15, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-success"
                                                                role="progressbar" style="width: 25%" aria-valuenow="25"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 2 </td>
                                                    <td> Messsy Adam </td>
                                                    <td> Jul 01, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-danger"
                                                                role="progressbar" style="width: 75%" aria-valuenow="75"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 3 </td>
                                                    <td> John Richards </td>
                                                    <td> Apr 12, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-warning"
                                                                role="progressbar" style="width: 90%" aria-valuenow="90"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 4 </td>
                                                    <td> Peter Meggik </td>
                                                    <td> May 15, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-primary"
                                                                role="progressbar" style="width: 50%" aria-valuenow="50"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 5 </td>
                                                    <td> Edward </td>
                                                    <td> May 03, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-danger"
                                                                role="progressbar" style="width: 35%" aria-valuenow="35"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> 5 </td>
                                                    <td> Ronald </td>
                                                    <td> Jun 05, 2015 </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-info"
                                                                role="progressbar" style="width: 65%" aria-valuenow="65"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title text-white">Todo</h4>
                                    <div class="add-items d-flex">
                                        <input type="text" class="form-control todo-list-input"
                                            placeholder="What do you need to do today?">
                                        <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn"
                                            id="add-task">Add</button>
                                    </div>
                                    <div class="list-wrapper">
                                        <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Meeting with Alisa
                                                    </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li class="completed">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox" checked> Call John
                                                    </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Create invoice </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Print Statements
                                                    </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li class="completed">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox" checked> Prepare for
                                                        presentation </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="checkbox" type="checkbox"> Pick up kids from
                                                        school
                                                    </label>
                                                </div>
                                                <i class="remove mdi mdi-close-circle-outline"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a
                                href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights
                            reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="mdi mdi-heart text-danger"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>

    </div>
    </div>



    <!-- plugins:js -->
    {{-- <script src="{{ asset('vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('vendors/chart.js/Chart.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('vendors/off-canvas.js')}}"></script>
    <script src="{{ asset('vendors/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('vendors/misc.js')}}"></script> --}}
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('vendors/dashboard.js')}}"></script>
    <script src="{{ asset('vendors/todolist.js')}}"></script>
    <!-- End custom js for this page -->

</body>





</html>
@endsection