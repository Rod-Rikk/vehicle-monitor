@extends('layouts.home', ['title'=>'Edit Role'])


@section('content')


<div class="content-wrapper">

    <div class="container">

        <div class="container-fluid">

            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white mr-2">
                        <i class="mdi mdi-account-outline"></i>
                    </span> View </h3>
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
                            <h4 class="card-title">Role details</h4>
                            <i class="mdi mdi-account-plus text-primary mdi-24px menu-icon" style="margin-left:10px"></i>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {{ $role->name }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Permissions:</strong>
                                    @if(!empty($rolePermissions))
                                    @foreach($rolePermissions as $v)
                                    <label class="label label-success">{{ $v->name }},</label>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


        </div>
    </div>
</div>



@endsection
