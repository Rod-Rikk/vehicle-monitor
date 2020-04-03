@extends('layouts.home' , ['title'=>'Users'])

@section('content')


<div class="content-wrapper">
    <div class="row" id="proBanner">
    </div>
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-account-outline"></i>
            </span> Users </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <h4 class="card-title float-left">Users</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>

                                    <th> Name </th>
                                    <th> Email </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email}}</td>
                                    <td><a href="/users/{{$user->id}}" class="btn btn-user btn-cancel"><i class="mdi mdi-eye text-info mdi-24px"></i></a></td>
                                    <td><a href="/users/{{$user->id}}/edit" class="btn btn-user btn-cancel"><i class="mdi mdi-tooltip-edit text-warning mdi-24px"></i></a>
                                    </td>
                                    <td><a class="btn btn-user btn-cancel" data-toggle="modal" data-target="#deleteModal-{{$user->id}}"><i class="mdi mdi-account-remove text-danger mdi-24px"></i></a>
                                    </td>
                                    <form method="POST" action="/users/ {{ $user->id }}">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <!-- Modal to confirm deletion-->
                                        <div class="modal fade" id="deleteModal-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Confirm
                                                            deletion
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete this user?
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
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title">Add User</h4>
                        <i class="mdi mdi-account-plus text-primary mdi-24px menu-icon" style="margin-left:10px"></i>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form class="user-form" style="margin-top:10px" method="POST" action="/users">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" {{ $errors->has('name') ? 'alert-danger' : '' }} placeholder="Name" value="{{ old('name') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" {{ $errors->has('email') ? 'alert-danger' : '' }} placeholder="Email" value="{{ old('email') }}" required>

                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" {{ $errors->has('password') ? 'alert-danger' : '' }} placeholder="Password" value="{{ old('password') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="role">Select role</label>
                            <select class="ui fluid search selection dropdown" style="margin-left:10px" id="search-select" name="role" aria-placeholder="Role">
                                @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>

                        </div>

                </div>
                <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
