@extends('layouts.home',['title'=>'Finished Jobs'])


@section('content')

<head>
    <title>Finished Jobs</title>
</head>

<div class="content-wrapper">

    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-clipboard-check"></i>

            </span>Jobs </h3>

    </div>

    <div class="row">

    </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Records</h4>
                <p class="card-description"> Finished jobs
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>

                                <th> Customer </th>
                                <th> Vehicle Code </th>
                                <th> Completed On</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobs as $job)
                            <tr>
                                @if (isset($job->customer->name))
                                <td>{{$job->customer->name }}</td>

                                @endif
                                <td>{{ $job->vehicle->code }}</td>
                                <td>{{ $job->completed_on->diffForHumans()}}</td>
                                <td><a href="/finished-jobs/{{$job->id}}" class="btn btn-user btn-cancel"><i class="mdi mdi-eye text-warning mdi-24px"></i></a>
                                </td>
                                <td><a class="btn btn-user btn-cancel" data-toggle="modal" data-target="#deleteModal-{{ $job->id }}"><i class="mdi mdi-delete-variant text-danger mdi-24px"></i></a>
                                </td>

                                <!-- Modal to confirm deletion-->
                                <div class="modal fade" id="deleteModal-{{$job->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
                                    <form method="POST" action="/finished-jobs/{{ $job->id }}">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Confirm deletion</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this record?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
    </div>



    @endsection
