@extends('layouts.home',['title'=>'Edit vehicle'])



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
            </span> Make modifications </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>

                </li>
            </ul>
        </nav>
    </div>

    <div class="col-md-9 grid-margin stretch-card" style="margin-left:15%">
        <div class="card">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <h4 class="card-title">Entry</h4>
                    <p class="card-description"> Update vehicle</p>
                    <form class="user-form" method="POST" action="/vehicles/{{$vehicle->id}}">
                        {{method_field('PATCH')}}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="numberPlate">Number plate</label>
                            <input type="text" class="form-control" name="num_plate"
                                {{ $errors->has('num_plate') ? 'alert-danger' : '' }} placeholder="Number Plate"
                                value="{{ $vehicle->num_plate }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            {{-- <textarea class="form-control" {{ $errors->has('description') ? 'alert-danger' : '' }}
                            name="description" rows="5" value="{{ $vehicle->description }}" required>
                            </textarea> --}}
                            <input type="text-area" class="form-control" name="description" rows="3"
                                {{$errors->has('description') ? 'alert-danger':''}} value="{{ $vehicle->description }} "
                                required>
                        </div>
                        <div class="form-group">
                            <label for="chassisNumber">Chassis Number</label>
                            <input type="text" class="form-control" name="cha_num"
                                {{ $errors->has('cha_num') ? 'alert-danger' : '' }} placeholder="Chassis No."
                                value="{{ $vehicle->cha_num }}" required>

                        </div>
                        <div class="form-group">
                            <label for="model">Model</label>
                            <input type="text" class="form-control" name="model"
                                {{ $errors->has('model') ? 'alert-danger' : '' }} placeholder="Model"
                                value="{{ $vehicle->model }}" required>

                        </div>
                        <div class="form-group">
                            <label for="code">Code</label>
                            <input type="text" class="form-control" name="code"
                                {{ $errors->has('code') ? 'alert-danger' : '' }} placeholder="Code"
                                value="{{ $vehicle->code }}" required>

                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection