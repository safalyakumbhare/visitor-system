@extends('layouts.user')
<title>User Dashboard</title>
@section('content')

<h1 class="mt-4">Welcome  {{ Auth::user()->name }}</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"> Dashboard</li>
</ol>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">
                <h3>Today's Guest</h3>
                <h5 class="mb-0">{{$visitors_today}}</h5>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{route('user.todays_guest')}}">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">
                <h3>Guest In</h3>
                <h5 class="mb-0">{{$visitors_in}}</h5>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{route('user.todays_guest')}}">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">
                <h3>Guest Out</h3>
                <h5 class="mb-0">{{$visitors_out}}</h5>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">
                <h3>Total Guest</h3>
                <h5 class="mb-0">{{$visitors}}</h5>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>

@endsection