@extends('layouts.home',['title'=>'Dashboard'])

@section('content')

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
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                    <img src="{{asset('images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Jobs <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{$total_jobs}}</h2>
                    <h6 class="card-text">Increased by 60%</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                    <img src="{{asset('images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Customers <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{$customers}}</h2>
                    <h6 class="card-text">Decreased by 10%</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-secondary card-img-holder text-white">
                <div class="card-body">
                    <img src="{{asset('images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Number of vehicles <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{$vehicles}}</h2>
                    <h6 class="card-text">Increased by 5%</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <h4 class="card-title float-left">Recent Jobs</h4>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> Customer </th>
                                        <th> Vehicle Model </th>
                                        <th> Completed on </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recent_jobs as $job)
                                    <tr>
                                        <td> {{$job->customer->name}} </td>
                                        <td> {{$job->vehicle->model}} </td>
                                        <td> {{$job->completed_on->diffForHumans() }} </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card bg-gradient-success card-img-holder text-dark">

                <div class="card-body">
                    <div class="card-title">
                        <h5 style="width:100%">Total completed jobs</h5>

                    </div>
                    <br><br>
                    <h1 style="margin-left:50%">{{$total_finished_jobs}}</h1>

                </div>
            </div>
        </div>

        <div class="col-md-3 grid-margin stretch-card">
            <div class="card bg-gradient-warning card-img-holder text-dark">

                <div class="card-body">
                    <div class="card-title">
                        <h5 style="width:100%">Total outstanding jobs</h5>

                    </div>
                    <br><br>
                    <h1 style="margin-left:50%">{{$total_current_jobs}}</h1>

                </div>
            </div>
        </div>


    </div>
</div>

@endsection
