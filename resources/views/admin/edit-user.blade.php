@extends('layouts.home',['title'=>'Edit user'])


@section('content')

<div class="content-wrapper">
    <div class="row d-none" id="proBanner">
        <div class="col-12">
            <span class="d-flex align-items-center purchase-popup">
                <p>Like what you see? Check out our premium version for more.</p>
                <a href="https://github.com/BootstrapDash/PurpleAdmin-Free-Admin-Template" target="_blank" class="btn ml-auto download-button">Download Free Version</a>
                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-4-admin-template/" target="_blank" class="btn purchase-button">Upgrade To Pro</a>
                <i class="mdi mdi-close" id="bannerClose"></i>
            </span>
        </div>
    </div>

    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-car"></i>
            </span> Edit user </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>
                    <a href="/users"> <button type="button" class="btn btn-gradient-primary btn-md"><i class="mdi mdi-keyboard-return icon-sm text-white align-middle mdi-24px"></i> </button>

                    </a>

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
                        <strong>Whoops! There were some problems with your input</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <h4 class="card-title">Entry</h4>
                    <p class="card-description"> Update user</p>
                    <form class="user-form" style="margin-top:10px" method="POST" action="/users/{{$user->id}}">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" {{ $errors->has('name') ? 'alert-danger' : '' }} placeholder="Name" value="{{ $user->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" {{ $errors->has('email') ? 'alert-danger' : '' }} placeholder="Email" value="{{ $user->email }}" required>

                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="hidden">
                            <input type="password" class="form-control" name="password" {{ $errors->has('password') ? 'alert-danger' : '' }} placeholder="Password" value="{{ $user->password }}" required>

                        </div>

                        <div class="form-group">
                            <label for="role">Select role</label> <br>
                            {{-- @foreach ($user_role as $current)
                                  <input class="text" class="form-control" disabled {{$current->name}}>
                            @endforeach --}}
                            {{-- <select class="ui fluid search selection dropdown">
                                <label for="">current roles</label>
                                @foreach ($user_role as $usr)
                                <option value=""> {{$usr->name}}</option>
                            @endforeach
                            </select> --}}

                            @foreach ($user_role as $usr)
                            <button type="button" class="btn btn-inverse-secondary btn-fw">Current role: {{ $usr->name }}</button>
                            @endforeach

                            <select style="margin-left:10px" id="search-select" name="role" aria-placeholder="Role">
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
