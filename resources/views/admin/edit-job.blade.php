@extends('layouts.admin')


@section('content')

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Edit Job</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <script src="{{ asset('js/semantic.min.js') }}"></script>
</head>

<div class="content-wrapper">
    <div class="row d-none" id="proBanner">
        <div class="col-12">
            <span class="d-flex align-items-center purchase-popup">
                <p>Like what you see? Check out our premium version for more.</p>
                <a href="https://github.com/BootstrapDash/PurpleAdmin-Free-Admin-Template" target="_blank"
                    class="btn ml-auto download-button">Download Free Version</a>
                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-4-admin-template/" target="_blank"
                    class="btn purchase-button">Upgrade To Pro</a>
                <i class="mdi mdi-close" id="bannerClose"></i>
            </span>
        </div>
    </div>

    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-car"></i>
            </span> Make modifications </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>
                    <button type="button" class="btn btn-gradient-primary btn-md"><i
                            class="mdi mdi-keyboard-return icon-sm text-white align-middle mdi-24px"> <a
                                href="/customers"></a></i> </button>

                </li>
            </ul>
        </nav>
    </div>

    <div class="col-md-9 grid-margin stretch-card" style="margin-left:15%">
        <div class="card">
            <div class="card">
                <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <h4 class="card-title">Edit</h4>
                    <p class="card-description text-danger"> Update a job for {{$job->customer->name}}</p>
                    <form class="user-form" method="POST" action="/jobs/{{$job->id}}">
                        {{method_field('PATCH')}}
                        {{ csrf_field() }}
                        {{-- Show the selected job's customer as a disabled element --}}
                        <div class="form-group">
                            {{-- <input type="form-control" class="form-control" name="customer_id"
                                {{ $errors->has('customer_id') ? 'alert-danger' : '' }} placeholder="Customer"
                            value="{{ $job->customer->name }}" disabled> --}}

                            <input type="hidden" name="customer_id" value="{{$job->customer->id}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Job Description</label>
                            <textarea class="form-control" {{ $errors->has('description') ? 'alert-danger' : '' }}
                                name="description" rows="6" value="{{ $job->description}}" placeholder="Description"
                                required> {{$job->description}}
                            </textarea>

                        </div>

                        <div class="form-group">
                            <label for="vehicle" style="margin-right:6px">Select vehicle code</label>

                            <select class="ui fluid search selection dropdown" name="vehicle_id" id="search-select2"
                                aria-placeholder="Vehicle">
                                @foreach ($vehicles as $vehicle)
                                <option value="{{$job->vehicle->id}}">{{$job->vehicle->code}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="location" class="form-control" name="location"
                                {{ $errors->has('location') ? 'alert-danger' : '' }} placeholder="Location"
                                value="{{ $job->location }}" required>

                        </div>
                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="date" class="form-control" name="start_date" min="1000-01-01" max="3000-12-31"
                                {{ $errors->has('start_date') ? 'alert-danger' : '' }} placeholder=""
                                value="{{ $job->start_date }}" required>

                        </div>

                        <div class="form-group">
                            <label for="end_date">End Date</label>
                            <input type="date" class="form-control" name="end_date" min="1000-01-01" max="3000-12-31"
                                {{ $errors->has('end_date') ? 'alert-danger' : '' }} placeholder=""
                                value="{{ $job->end_date }}" required>

                        </div>

                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text text-primary">
                                    <div class="form-check form-check-success">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="job_done" id="done"
                                                value="1"> Mark Job as
                                            Finished <i class="input-helper"></i></label>

                                        {{-- <script type="text/javascript">
                                            function check(){
                                                document.getElementById("done").val = 1;
                                            }

                                            function uncheck(){
                                                document.getElementById("done").val = 0;
                                            }
                                        </script> --}}
                                    </div>
                                </div>
                            </div>
                            <textarea class="form-control" name="remarks" rows="6" placeholder="Finished remarks"
                                > </textarea>
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
                <script type="text/javascript">
                    $("form").on( "submit", function( event ) {
                    event.preventDefault();
                    $('input[customer_id="customer_id"]').val('Doe');
                    $("form").submit();
                    });
                </script>
            </div>
        </div>
    </div>
</div>

<script text="javascript">
    $('#search-select')
  .dropdown();
</script>

<script text="javascript">
    $('$search-select2')
    .dropdown();
</script>
@endsection