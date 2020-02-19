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
                                                <p class="card-description"> Add a new vehicler</p>
                                                <form class="forms-sample">
                                                    <div class="form-group">
                                                        <label for="numberPlate">Number plate</label>
                                                        <input type="text" class="form-control" id="numberPlate"
                                                            placeholder="Username">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea class="form-control" id="description"
                                                            rows="4"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Chassis Number</label>
                                                        <input type="email" class="form-control" id="chassisNumber"
                                                            placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Code</label>
                                                        <input type="password" class="form-control" id="code"
                                                            placeholder="Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputConfirmPassword1">Confirm
                                                            Password</label>
                                                        <input type="password" class="form-control"
                                                            id="exampleInputConfirmPassword1" placeholder="Password">
                                                    </div>
                                                    <div class="form-check form-check-flat form-check-primary">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input"> Remember me
                                                            <i class="input-helper"></i></label>
                                                    </div>

                                                    {{-- <div style="margin-top:10%">
                                                        <button type="submit"
                                                            class="btn btn-gradient-primary mr-2">Submit</button>
                                                        <button class="btn btn-light" style="margin-left:20%">Cancel</button></div> --}}
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
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
                            <th> Code </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehicles as $vehicles)
                        <tr>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection