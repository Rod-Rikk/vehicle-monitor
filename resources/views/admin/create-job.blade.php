@extends('layouts.admin')


@section('content')

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Create Job</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <script src="{{ asset('js/semantic.min.js') }}"></script>
</head>

<div class="content-wrapper">
    <div class="row d-none" id="proBanner">
        <div class="col-md-12">
            <span class="d-flex align-items-center purchase-popup">
                <p>Like what you see? Check out our premium version for more.</p>
                <a href="https://github.com/BootstrapDash/PurpleAdmin-Free-Admin-Template" target="_blank"
                    class="btn ml-auto download-button">Download Free Version</a>
                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-4-admin-template/" target="_blank"
                    class="btn purchase-button">Upgrade To Pro</a>
                <i class="mdi mdi-close" id="bannerClose"></i>

                <link rel="stylesheet" href="/css/dropdown.css">
            </span>
        </div>
    </div>

    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-car"></i>
            </span> Job </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>
                    <a href="/jobs" class="btn btn-gradient-primary btn-md mdi mdi-keyboard-return mdi-24px"></a>

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

                    <h4 class="card-title">Entry</h4>
                    <p class="card-description"> Create job</p>
                    <form class="user-form" method="POST" action="/jobs">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="customer" style="margin-right:6px">Select customer</label>
                            <select class="ui fluid search selection dropdown" id="search-select" name="customer_name"
                                aria-placeholder="Customer">
                                @foreach ($customers as $customer)
                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                                @endforeach
                            </select>
                            <script text="javformascript">
                                $('#search-select')
                              .dropdown();
                            </script>

                        </div>


                        <div class="form-group">
                            <label for="description">Job Description</label>
                            <textarea class="form-control" {{ $errors->has('description') ? 'alert-danger' : '' }}
                                name="description" rows="5" value="{{ old('description') }}" placeholder="Description"
                                required>
                            </textarea>

                        </div>
                        <div class="form-group">
                            <label for="vehicle" style="margin-right:6px">Select vehicle code</label>

                            <select class="ui fluid search selection dropdown" name="vehicle_code" id="search-select2"
                                aria-placeholder="Vehicle">
                                @foreach ($vehicles as $vehicle)
                                <option value="{{$vehicle->id}}">{{$vehicle->code}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="location" class="form-control" name="location"
                                {{ $errors->has('location') ? 'alert-danger' : '' }} placeholder="Location"
                                value="{{ old('location') }}" required>

                        </div>
                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="date" class="form-control" name="start_date" min="1000-01-01" max="3000-12-31"
                                {{ $errors->has('start_date') ? 'alert-danger' : '' }} placeholder=""
                                value="{{ old('start_date') }}" required>

                        </div>

                        <div class="form-group">
                            <label for="end_date">End Date</label>
                            <input type="date" class="form-control" name="end_date" min="1000-01-01" max="3000-12-31"
                                {{ $errors->has('end_date') ? 'alert-danger' : '' }} placeholder=""
                                value="{{ old('end_date') }}" required>

                        </div>

                </div>
                <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
                </form>
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

<!-- You MUST include jQuery before Fomantic -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/semantic/dist/semantic.min.css">
<script src="/semantic/dist/semantic.min.js"></script>

@endsection