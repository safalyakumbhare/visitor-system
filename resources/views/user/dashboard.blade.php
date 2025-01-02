@extends('layouts.user')
<title>User Dashboard</title>
@section('content')

<h1 class="mt-4">Welcome {{ Auth::user()->name }}</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"> Dashboard</li>
</ol>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body d-flex justify-content-between align-items-end flex-column">
                <h3>Today's Guest</h3>
                <h5 class="mb-0">{{count($visitors_today)}}</h5>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{route('user.todays_guest')}}">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body d-flex justify-content-between align-items-end flex-column">
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
            <div class="card-body d-flex justify-content-between align-items-end flex-column">
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
            <div class="card-body d-flex justify-content-between align-items-end flex-column">
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


<div class="card mb-4 mt-4">
    <div class="card-header">
        <h3 class="text-center">
            <i class="fas fa-table mr-1"></i>
            Today's Guest
        </h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Guest Name</th>
                        <th>Guest Phone No.</th>
                        <th>Purpose of Visit</th>
                        <th>In Time</th>
                        <th>Out Time</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($visitors_today as $visitor)
                    <tr>
                        <td>{{$visitor->name}}</td>
                        <td>{{$visitor->contact}}</td>
                        <td>{{$visitor->purpose}}</td>
                        <td> {{ date('h:i A',strtotime($visitor->out_time)) }}</td>
                        <td>
                            @if($visitor->out_time == '')
                            ---
                            @else
                            {{ date('h:i A',strtotime($visitor->out_time)) }}
                            @endif
                        </td>
                        <td>
                            @if($visitor->status == 'in')
                            <span class="badge text-bg-success">In</span>
                            @else
                            <span class="badge text-bg-danger">Out</span>

                            @endif
                        </td>
                    </tr>

                    @endforeach
                    @if ($visitors_today->isEmpty())

                    <tr>
                        <td colspan="6" class="text-center">No Guest Today</td>
                    </tr>

                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection