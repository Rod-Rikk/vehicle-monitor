@extends('layouts.admin')


@section('content')

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
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

                    <h4 class="card-title">Entry</h4>
                    <p class="card-description"> Create job</p>
                    <form class="user-form" method="POST" action="/jobs">
                        {{ csrf_field() }}
                        <div class="form-group">

                            <form method="GET" action="/job_customers">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn">Dropdown</button>
                                    <div id="myDropdown" class="dropdown-content">
                                        <input type="text" placeholder="Search.." name="customer" id="myInput"
                                            onkeyup="filterFunction()">
                                        @foreach ($customers as $customer)
                                        <a href="{{$customer.name}}"></a>
                                        @endforeach
                                    </div>
                                </div>
                            </form>
                        </div>

                        <script type="text/javascript">kman Holdings.Inc
                            /* When the user clicks on the button,
                            toggle between hiding and showing the dropdown content */
                            function myFunction() {
                            document.getElementById("myDropdown").classList.toggle("show");
                                }

                                function filterFunction() {
                                var input, filter, ul, li, a, i;
                                input = document.getElementById("myInput");
                                filter = input.value.toUpperCase();
                                div = document.getElementById("myDropdown");
                                a = div.getElementsByTagName("a");
                                for (i = 0; i < a.length; i++) {
                                    txtValue = a[i].textContent || a[i].innerText;
                                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                    a[i].style.display = "";
                                    } else {
                                    a[i].style.display = "none";
                                    }
                                }
                                }
                      
                        </script>

                        <div class="form-group">
                            <label for="description">Job Description</label>
                            <textarea class="form-control" {{ $errors->has('description') ? 'alert-danger' : '' }}
                                name="description" rows="5" value="{{ old('description') }}" placeholder="Description"
                                required>
                            </textarea>

                        </div>
                        <div class="form-group">
                            <label for="vehicle"></label>
                            <select v-model="vehicle" name="vehicle_code" class="form-control" @change="loadVehicles">
                                <option>Select vehicle</option>
                                <option v-for="vehicle in vehicles" :value="vehicle.id">@{{ vehicle.code }}
                                </option>
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



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

@endsection