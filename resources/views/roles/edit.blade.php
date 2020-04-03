@extends('layouts.home', ['title'=>'Edit Role'])


@section('content')


<div class="content-wrapper">

    <div class="container">

        <div class="container-fluid">

            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white mr-2">
                        <i class="mdi mdi-account-outline"></i>
                    </span> Edit </h3>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            <span></span> <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>


                        </li>
                    </ul>
                </nav>
            </div>






            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <h4 class="card-title">Edit Role</h4>
                            <i class="mdi mdi-account-plus text-primary mdi-24px menu-icon" style="margin-left:10px"></i>
                        </div>

                        <form style="margin-top:10px" method="POST" action="/roles/{{$role->id}}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" {{ $errors->has('name') ? 'alert-danger' : '' }} placeholder="Name" value="{{ $role->name }}" required>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <strong>Permissions:</strong> <br><br>
                                        @foreach ($permissions as $value)
                                        <label for="permission" class="form-check-label"> </label>
                                        <input type="checkbox" name="permission[]" class="form-check-input" value="{{ $value->id }}">
                                        {{$value->name}}
                                        <br> <br>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <label for="currentPermissions">Current Permissions for this Role</label>
                                    <div class="ul">
                                        @foreach ($rolePermissions as $perms)
                                        <li>{{$perms->name}}</li>
                                        @endforeach
                                    </div>

                                </div>

                            </div>


                            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>

                        </form>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>


{{-- <div class="form">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permission:</strong>
            <br />
            @foreach($permission as $value)
            <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
{{ $value->name }}</label>
<br />
@endforeach
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div> --}}




@endsection
