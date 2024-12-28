@extends('layouts.admin')

<title>Visitor Dashboard</title>
@section('content')
<h1 class="mt-4">
    <h1 class="mt-4">Visitors Details</h1>
</h1>


<div class="row mt-5">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Visitors Management</h3>
                <a href="{{ route('admin.add-visitor') }}" class="btn btn-primary">Add Visitor</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="visitorTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Visitor Name</th>
                                <th>Visitor Phone</th>
                                <th>Visited To Flat No.</th>
                                <th>Purpose</th>
                                <th>In Time</th>
                                <th>Out Time</th>
                                <th>Date of Visit</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($visitors as $visitor)
                            <tr>
                                <td>{{ $visitor->name }}</td>
                                <td>{{ $visitor->contact }}</td>
                                <td>{{ $visitor->flat_number }}</td>
                                <td>{{ $visitor->purpose }}</td>
                                <td>{{ date('h:i A', strtotime($visitor->in_time)) }}</td>
                                <td>
                                    @if($visitor->out_time == '')
                                    <P>---</P>
                                    @else
                                    {{ date('h:i A',strtotime($visitor->out_time)) }}
                                    @endif
                                </td>
                                <td>{{ $visitor->date_of_visit }}</td>
                                <td>
                                    @if($visitor->status == 'in')
                                    <span class="badge text-bg-success">In</span>
                                    @else
                                    <span class="badge text-bg-danger">Out</span>

                                    @endif


                                <td>
                                    <a href="{{route('admin.visitor-out',$visitor->id)}}" data-bs-toggle="tooltip" data-bs-title="Out"><i class="fa-solid text-primary fa-arrow-right-from-bracket p-1"></i></a>
                                    <a href="{{route('admin.visitor-out',$visitor->id)}}" data-bs-toggle="tooltip" data-bs-title="Remove"><i class="fa-solid fa-trash p-1 text-danger"></i></a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection