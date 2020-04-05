@extends('layouts.home',['title'=>'Vehicles'])

@section('content')

<div class="content-wrapper">
    {{-- A toast block to send feedback to user on a successful operation --}}
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{$message}}
    </div>
    @endif


    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-car"></i>
            </span> Vehicles </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>
                    <button type="button" class="btn btn-gradient-primary btn-md" data-toggle="modal" data-target="#createModal"><i class="mdi mdi-database-plus icon-sm text-white align-middle mdi-24px"></i> </button>

                    <form method="POST" action="/vehicles">
                        {{ csrf_field() }}
                        <!-- Modal to create a vehicle-->
                        <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="createModalLongTitle">Add an entry</h5>
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

                                                    @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif

                                                    <div class="form-group">
                                                        <label for="numberPlate">Number plate</label>
                                                        <input type="text" class="form-control" name="num_plate" {{ $errors->has('num_plate') ? 'alert-danger' : '' }} placeholder="Number Plate" value="{{ old('num_plate') }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea class="form-control" {{ $errors->has('description') ? 'alert-danger' : '' }} name="description" rows="4" value="{{ old('num_plate') }}" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="chassisNumber">Chassis Number</label>
                                                        <input type="text" class="form-control" name="cha_num" {{ $errors->has('cha_num') ? 'alert-danger' : '' }} placeholder="Chassis No." value="{{ old('num_plate') }}" required>

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="model">Model</label>
                                                        <input type="text" class="form-control" name="model" {{ $errors->has('model') ? 'alert-danger' : '' }} placeholder="Model" value="{{ old('num_plate') }}" required>

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="code">Code</label>
                                                        <input type="number" class="form-control" name="code" {{ $errors->has('code') ? 'alert-danger' : '' }} placeholder="Code" value="{{ old('num_plate') }}" required>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <div>
                                            <button type="submit" class="btn btn-primary btn-user btn-cancel">
                                                Submit
                                                <i style="margin-left=" 50px" class="mdi mdi-renew  "></i>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

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
                            <td><a href="/vehicles/{{$vehicle->id}}/edit" class="btn btn-user btn-cancel"><i class="mdi mdi-tooltip-edit text-warning mdi-24px">Edit</i></a>
                                </button></td>
                            <td><a class="btn btn-user btn-cancel" data-toggle="modal" data-target="#deleteModal"><i class="mdi mdi-delete-variant text-danger mdi-24px">Delete</i></a>
                                </button></td>
                            <form method="POST" action="/vehicles/ {{ $vehicle->id }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <!-- Modal to confirm deletion-->
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
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



    @endsection
