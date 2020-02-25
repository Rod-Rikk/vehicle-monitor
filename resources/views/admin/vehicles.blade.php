@extends('layouts.admin')

@section('content')

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
            </span> Vehicles </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>
                    <button type="button" class="btn btn-gradient-primary btn-md" data-toggle="modal"
                        data-target="#exampleModalCenter"><i
                            class="mdi mdi-database-plus icon-sm text-white align-middle mdi-24px"></i> </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">



                            {{-- Create vehicle form --}}
                            <form class="user" method="POST" action="/vehicles">
                                {{ csrf_field() }}

                                {{-- errors block --}}
                                @if ($errors->any())
                                <div class="col-md-6">
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                @endif

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Persist data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-md-12 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">Entry</h4>
                                                    <p class="card-description"> Add a new vehicle</p>

                                                    <div class="form-group">
                                                        <label for="numberPlate">Number plate</label>
                                                        <input type="text" class="form-control" name="num_plate"
                                                            placeholder="Number Plate">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea class="form-control" name="description"
                                                            rows="4"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="chassisNumber">Chassis Number</label>
                                                        <input type="text" class="form-control" name="cha_num"
                                                            placeholder="Chassis No.">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="model">Model</label>
                                                        <input type="text" class="form-control" name="model"
                                                            placeholder="Model">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="code">Code</label>
                                                        <input type="password" class="form-control" name="code"
                                                            placeholder="Code">
                                                    </div>

                                                    {{-- <div style="margin-top:10%">
                                                        <button type="submit"
                                                            class="btn btn-gradient-primary mr-2">Submit</button>
                                                        <button class="btn btn-light" style="margin-left:20%">Cancel</button></div> --}}

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>




                </li>
            </ul>
        </nav>
    </div>

    <div class="row">

    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Vehicles Table</h4>
                <p class="card-description"> Current vehicles
                </p>
                <table class="table table-striped">
                    <thead>
                        <tr>

                            <th> Number Plate </th>
                            <th> Description </th>
                            <th> Chassis No. </th>
                            <th> Model </th>
                            <th> Code </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehicles as $vehicle)
                        <tr>
                            <td>{{ $vehicle->num_plate }}</td>
                            <td>{{ $vehicle->description }}</td>
                            <td>{{ $vehicle->cha_num}}</td>
                            <td>{{ $vehicle->model }}</td>
                            <td>{{ $vehicle->code }}</td>
                            <td> <i class="mdi mdi-tooltip-edit text-warning mdi-24px"></i></td>
                            <td> <i class="mdi mdi-delete-variant text-danger mdi-24px"></i></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Edit Modal Block --}}



</div>

@endsection