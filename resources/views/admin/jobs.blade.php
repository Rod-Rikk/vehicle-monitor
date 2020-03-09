@extends('layouts.admin')


@section('content')

<head>
    <title>Current Jobs</title>
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
                <i class="mdi mdi-contacts"></i>
            </span>Jobs </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>
                <button type="button" class="btn btn-gradient-primary btn-md"> <a href="/create-job"></a><i
                            class="mdi mdi-database-plus icon-sm text-white align-middle mdi-24px"></i> </button>

                </li>
            </ul>
        </nav>
    </div>

    <div class="row">

    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Records</h4>
                <p class="card-description"> Current jobs
                </p>
                <table class="table table-striped">
                    <thead>
                        <tr>

                            <th> Customer </th>
                            <th> Description</th>
                            <th> Vehicle Code </th>
                            <th> Phone </th>
                            <th> Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jobs as $job)
                        <tr>
                            <td>{{$job->customer_name }}</td>
                            <td>{{ $job->description }}</td>
                            <td>{{ $job->vehicle_code}}</td>
                            <td>{{ $job->location }}</td>
                            
                            <td><a href="/jobs/{{$job->id}}/edit" class="btn btn-user btn-cancel"><i
                                        class="mdi mdi-tooltip-edit text-warning mdi-24px"></i></a>
                            </td>
                            <td><a class="btn btn-user btn-cancel" data-toggle="modal" data-target="#deleteModal"><i
                                        class="mdi mdi-delete-variant text-danger mdi-24px"></i></a>
                            </td>
                            <form method="POST" action="/jobs/ {{ $job->id }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <!-- Modal to confirm deletion-->
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                    aria-labelledby="deleteModalTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Confirm deletion</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this record?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <div>
                                                    <button type="submit" class="btn btn-danger btn-user btn-cancel">
                                                        Delete
                                                        <i style="margin-left=" 50px" class="fas fa-trash-alt  "></i>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    @endsection