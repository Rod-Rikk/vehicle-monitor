@extends('layouts.home',['title'=>'Customers'])

@section('content')

@can('customer-list')
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
                <i class="mdi mdi-contacts"></i>
            </span> Customers </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>

                    @can('customer-create')
                    <button type="button" class="btn btn-gradient-primary btn-md" data-toggle="modal" data-target="#createModal"><i class="mdi mdi-database-plus icon-sm text-white align-middle mdi-24px"></i> </button>
                    @endcan

                    <form method="POST" action="/customers">
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
                                                    <p class="card-description"> Add a new customer</p>

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
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" name="name" {{ $errors->has('name') ? 'alert-danger' : '' }} placeholder="Name of Individual/Company" value="{{ old('name') }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <textarea class="form-control" {{ $errors->has('address') ? 'alert-danger' : '' }} name="address" rows="4" value="{{ old('address') }}" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" name="email" {{ $errors->has('email') ? 'alert-danger' : '' }} placeholder="Email" value="{{ old('email') }}" required>

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="text" class="form-control" name="phone" {{ $errors->has('phone') ? 'alert-danger' : '' }} placeholder="Phone No." value="{{ old('phone') }}" required>

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
                                                <i style="margin-left=" 50px" class="mdi mdi-renew"></i>
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
                <h4 class="card-title">Customers Table</h4>
                <p class="card-description"> Current customers
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>

                                <th> Name </th>
                                {{-- <th> Address</th> --}}
                                <th> Email </th>
                                <th> Phone </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                            <tr>
                                <td>{{ $customer->name }}</td>
                                {{-- <td>{{ $customer->address }}</td> --}}
                                <td>{{ $customer->email}}</td>
                                <td>{{ $customer->phone }}</td>
                                @can('customer-edit')
                                <td><a href="/customers/{{$customer->id}}/edit" class="btn btn-user btn-cancel"><i class="mdi mdi-tooltip-edit text-warning mdi-24px"></i></a>
                                </td>
                                @endcan

                                @can('customer-delete')
                                <td><a class="btn btn-user btn-cancel" data-toggle="modal" data-target="#deleteModal-{{ $customer->id }}"><i class="mdi mdi-delete-variant text-danger mdi-24px"></i></a>

                                </td>
                                @endcan

                                <!-- Modal to confirm deletion-->
                                <div class="modal fade" id="deleteModal-{{ $customer->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
                                    <form method="POST" action="/customers/ {{ $customer->id }}">
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

    @endcan

    @endsection
