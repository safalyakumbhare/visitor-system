@extends('layouts.admin')

<title>Admin Dashboard</title>
@section('content')
<h1 class="mt-4">Users</h1>
<!-- <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol> -->

<div class="row mt-4">
    <div class="col-md-12">
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-light  table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Alternate Number</th>
                        <th>Flat No.</th>
                        <th>Block</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->alternate_phone }}</td>
                        <td>{{ $user->flat_no }}</td>
                        <td>{{ $user->block }}</td>
                        <td>
                            <a class="m-3" href="{{route('admin.user-delete',$user->id)}}" ><i class="fa-solid fa-trash text-danger"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection