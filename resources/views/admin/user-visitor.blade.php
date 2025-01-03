@extends('layouts.admin')

<title>User Visitors</title>

@section('content')
<h1 class="mt-4">
    <h1 class="mt-4">{{$user_name->name}}'s Visitors </h1>
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

           
            </div>
            <div class="card-body p-0 ">
                <div class="table-responsive">
                    <table id="visitorTable" class="table table-bordered  table-light  table-striped">
                        <thead>
                            <tr>
                                <th>Visitor Name</th>
                                <th>Visitor Phone</th>
                                <th>User</th>
                                <th>Block</th>
                                <th>Flat Number</th>
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
                            @php
                            $user = $user_data->firstWhere('id', $visitor->user_id);
                            @endphp

                            <tr>
                                <td>{{ $visitor->name }}</td>
                                <td>{{ $visitor->contact }}</td>
                                <td>
                                    {{ $user->name }}
                                </td>
                                <td>{{ $user->block }}</td>
                                <td>{{ $user->flat_no }}</td>
                                <td>{{ $visitor->purpose }}</td>
                                <td>{{ date('h:i A', strtotime($visitor->in_time)) }}</td>
                                <td>
                                    @if($visitor->out_time == '')
                                    <P>---</P>
                                    @else
                                    {{ date('h:i A',strtotime($visitor->out_time)) }}
                                    @endif
                                </td>
                                <td>{{ date('d-m-Y',strtotime($visitor->date_of_visit)) }}</td>
                                <td>
                                    @if($visitor->status == 'in')
                                    <span class="badge text-bg-success">In</span>
                                    @else
                                    <span class="badge text-bg-danger">Out</span>

                                    @endif


                                <td>
                                    @if($visitor->status == 'in')
                                    <a href="{{route('admin.visitor-out',$visitor->id)}}" data-bs-toggle="tooltip" data-bs-title="Out"><i class="fa-solid text-primary fa-arrow-right-from-bracket p-1"></i></a>
                                    @else
                                    @endif
                                    <a href="{{route('admin.visitor-out',$visitor->id)}}" data-bs-toggle="tooltip" data-bs-title="Remove"><i class="fa-solid fa-trash p-1 text-danger"></i></a>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{$visitors->links('pagination::bootstrap-5')}}
            </div>
        </div>
    </div>
</div>





@endsection