@extends('layouts.home' , ['title'=>'Roles'])

@section('content')


<div class="content-wrapper">
    {{-- A toast block to send feedback to user on a successful operation --}}
    @if ($message = Session::get('success'))
    <div class="alert alert-success" style="font-family:'Nunito'">
        {{$message}}
    </div>
    @endif

    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-account-outline"></i>
            </span> Roles </h3>
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
                        <h4 class="card-title float-left">Roles</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>

                                        <th> Name </th>
                                        <th> Created </th>
                                        <th> View </th>
                                        <th> Edit </th>
                                        <th> Delete </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->created_at->diffForHumans()}}</td>
                                        <td><a href="/roles/{{$role->id}}" class="btn btn-user btn-cancel"><i class="mdi mdi-eye text-info mdi-24px"></i></a>
                                        </td>
                                        <td><a href="/roles/{{$role->id}}/edit" class="btn btn-user btn-cancel"><i class="mdi mdi-tooltip-edit text-warning mdi-24px"></i></a>
                                        </td>
                                        <td><a class="btn btn-user btn-cancel" data-toggle="modal" data-target="#deleteModal-{{$role->id}}"><i class="mdi mdi-account-remove text-danger mdi-24px"></i></a>
                                        </td>

                                        <!-- Modal to confirm deletion-->
                                        <div class="modal fade" id="deleteModal-{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
                                            <form method="POST" action="/roles/ {{ $role->id }}">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}

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
                                                            Are you sure you want to delete this role?
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
        </div>
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title">Add Role</h4>
                        <i class="mdi mdi-account-plus text-primary mdi-24px menu-icon" style="margin-left:10px"></i>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <strong>Whoops!</strong> There are issues with your input. <br> <br>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form class="user-form" style="margin-top:10px" method="POST" action="/roles">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" {{ $errors->has('name') ? 'alert-danger' : '' }} placeholder="Name" value="{{ old('name') }}" required>
                        </div>

                        <div class="form-group">
                            <strong>Permission:</strong> <br><br>
                            @foreach ($permissions as $value)
                            <label for="permission" class="form-check-label">
                                <input type="checkbox" name="permission[]" class="checkbox" value="{{ $value->id }}">
                                {{$value->name}}
                            </label>
                            <br> <br>
                            @endforeach

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
