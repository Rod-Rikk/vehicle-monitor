@extends('layouts.admin')


@section('content')

<head>
    <title>Finished Jobs</title>
</head>

<div class="content-wrapper">

    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-contacts"></i>
            </span>Jobs </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>
                    <a href="/create-job" class="btn btn-gradient-primary btn-md mdi mdi-database-plus mdi-24px"></a>

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
                <p class="card-description"> Finished jobs
                </p>
                <table class="table table-striped">
                    <thead>
                        <tr>

                            <th> Customer </th>
                            <th> Description</th>
                            <th> Vehicle Code </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jobs as $job)
                        <tr>
                            <td>{{$job->customer->name }}</td>
                            <td>{{ $job->description }}</td>
                            <td>{{ $job->vehicle->code}}</td>
                            <td><a href="/finished-jobs/{{$job->id}}" class="btn btn-user btn-cancel"><i
                                        class="mdi mdi-eye text-warning mdi-24px"></i></a>
                            </td>
                            <td><a class="btn btn-user btn-cancel" data-toggle="modal" data-target="#deleteModal"><i
                                        class="mdi mdi-delete-variant text-danger mdi-24px"></i></a>
                            </td>
                            <form method="POST" action="/finished-jobs/ {{ $job->id }}">
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