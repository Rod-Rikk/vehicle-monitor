@extends('layouts.home',['title'=>'Job details'])



@section('content')

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Edit Job</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <script src="{{ asset('js/semantic.min.js') }}"></script>
</head>

<div class="content-wrapper">
    <div class="row d-none" id="proBanner">
        <div class="col-12">
            <span class="d-flex align-items-center purchase-popup">
                <p>Like what you see? Check out our premium version for more.</p>
                <a href="https://github.com/BootstrapDash/PurpleAdmin-Free-Admin-Template" target="_blank" class="btn ml-auto download-button">Download Free Version</a>
                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-4-admin-template/" target="_blank" class="btn purchase-button">Upgrade To Pro</a>
                <i class="mdi mdi-close" id="bannerClose"></i>
            </span>
        </div>
    </div>


    <body>
        <div class="container">
            <!-- Begin Page Content -->
            <div class="container-fluid">


                <div class="mb-3 card">
                    <div class="card"></div>
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">Details</h6>
                    </div>
                    <div class="card-body">

                        {{-- First Row of Info --}}
                        <div class="no-gutters row">
                            <div class="col-sm-6 col-md-4 col-xl-4">
                                <div style="margin-bottom: 10px" class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i style="margin-right: 10px" class="mdi mdi-human-greeting mdi-24px"></i>
                                    </div>
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">CUSTOMER
                                        </div>

                                        @if (isset($job->customer->name))

                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$job->customer->name}}
                                            @else
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Empty/deleted record

                                                @endif

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl-4">
                                    <div style="margin-bottom: 10px" class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i style="margin-right: 10px" class="mdi mdi-car mdi-24px"></i>
                                        </div>
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">VEHICLE
                                                NO.PLATE
                                            </div>

                                            @if (isset($job->vehicle->num_plate))

                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$job->vehicle->num_plate}}
                                                @else
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Empty/deleted record

                                                    @endif
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-4">
                                        <div style="margin-bottom: 10px" class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i style="margin-right: 10px" class="mdi mdi-map-marker-radius mdi-24px"></i>
                                            </div>
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">JOB LOCATION
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$job->location}}

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                {{-- Second Row of Info --}}

                                <div class="no-gutters row" style="margin-top:10%">
                                    <div class="col-sm-6 col-md-4 col-xl-4">
                                        <div style="margin-bottom: 10px" class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i style="margin-right: 10px" class="mdi mdi-calendar-plus mdi-24px"></i>
                                            </div>
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">START DATE
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    {{$job->start_date->toFormattedDateString()}}

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-4">
                                        <div style="margin-bottom: 10px" class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i style="margin-right: 10px" class="mdi mdi-calendar-remove mdi-24px"></i>
                                            </div>
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">END DATE
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    {{$job->end_date->toFormattedDateString()}}

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-4">
                                        @if ($status == 'upcoming')
                                        <div style="margin-bottom: 10px" class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i style="margin-right: 10px" class="mdi mdi-alarm-check mdi-24px"></i>
                                            </div>

                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">JOB ONGOING
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"> Deadline is:
                                                    {{$job->end_date->diffForHumans()}}

                                                </div>

                                            </div>

                                        </div>
                                        @endif


                                        @if ($status == 'current')
                                        <div style="margin-bottom: 10px" class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i style="margin-right: 10px" class="mdi mdi-alarm mdi-24px"></i>
                                            </div>

                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">JOB END
                                                    DATE IS TODAY...
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"> Deadline is:
                                                    {{$job->end_date->diffForHumans()}}

                                                </div>

                                            </div>

                                        </div>

                                        @endif


                                        @if ($status == 'past')
                                        <div style="margin-bottom: 10px" class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i style="margin-right: 10px" class="mdi mdi-alarm-off mdi-24px"></i>
                                            </div>

                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">JOB END
                                                    DATE IS OVERDUE!
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"> Job deadline was:
                                                    {{$job->end_date->diffForHumans()}}

                                                </div>

                                            </div>

                                        </div>
                                        @endif
                                    </div>
                                </div>

                                {{-- Third Row of Info --}}
                                <div class="no-gutters row" style="margin-top:10%">
                                    <div class="col-sm-6 col-md-6 col-xl-6">
                                        <div style="margin-bottom: 10px" class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i style="margin-right: 10px" class="mdi mdi-comment-question-outline mdi-24px"></i>
                                            </div>
                                            <div class="col mr-4">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">JOB
                                                    DESCRIPTION
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$job->description}}

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-xl-6">
                                        <div style="margin-bottom: 10px" class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <i style="margin-right: 10px" class="mdi mdi-carmdi mdi-comment-check mdi-24px"></i>
                                            </div>
                                            <div class="col mr-4">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">JOB REMARKS
                                                    ON COMPLETION
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$job->remarks}}
                                                    @if ($job->remarks == '')
                                                    <div class="h5 font-weight-light text-secondary-800">
                                                        <p>No remarks attached to this job.</p>
                                                    </div>
                                                    @endif
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="h5 font-weight-light text-success">This job was completed: </div>
                                    <div class="h5 font-weight-bold text-success" style="margin-right:10px">
                                        {{$job->completed_on->diffForHumans()}}</div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
    </body>


    @endsection
