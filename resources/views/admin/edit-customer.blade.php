@extends('layouts.home', ['title'=>'Edit Customer'])


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
                    <button type="button" class="btn btn-gradient-primary btn-md"><i
                            class="mdi mdi-keyboard-return icon-sm text-white align-middle mdi-24px"> <a
                                href="/customers"></a></i> </button>

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
                    <p class="card-description"> Update customer</p>
                    <form class="user-form" method="POST" action="/customers/{{$customer->id}}">
                        {{method_field('PATCH')}}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name"
                                {{ $errors->has('name') ? 'alert-danger' : '' }} placeholder="Name"
                                value="{{ $customer->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Address</label>
                            {{-- <textarea class="form-control" {{ $errors->has('description') ? 'alert-danger' : '' }}
                            name="address" rows="5" value="{{ $customer->address }}" required>
                            </textarea> --}}
                            <input type="text-area" class="form-control" name="address" rows="3"
                                {{$errors->has('address') ? 'alert-danger':''}} value="{{ $customer->address }} "
                                required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email"
                                {{ $errors->has('email') ? 'alert-danger' : '' }} placeholder="Email"
                                value="{{ $customer->email }}" required>

                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone"
                                {{ $errors->has('phone') ? 'alert-danger' : '' }} placeholder="Phone"
                                value="{{ $customer->phone }}" required>

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