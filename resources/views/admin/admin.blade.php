@extends('layouts.admin')

<title>Admin Dashboard</title>
@section('content')
<h1 class="mt-4"><h1 class="mt-4">Welcome  {{ Auth::user()->name }}</h1>
</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body d-flex justify-content-between align-items-end flex-column">
                <h3>Visitors Today</h3>
                <h5 class="mb-0">{{$visitor_today}}</h5>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{route('admin.visitor-today')}}">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body d-flex justify-content-between align-items-end flex-column">
                <h3>Visitors In</h3>
                <h5 class="mb-0">{{$visitor_in}}</h5>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{route('admin.visitor-in')}}">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body d-flex justify-content-between align-items-end flex-column">
                <h3>Total Visitors</h3>
                <h5 class="mb-0">{{$visitor}}</h5>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{route('admin.visitor')}}">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body d-flex justify-content-between align-items-end flex-column">
                <h3>Users</h3>
                <h5 class="mb-0">{{$user}}</h5>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{route('admin.user-list')}}">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>

@endsection