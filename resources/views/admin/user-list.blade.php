@extends('layouts.admin')

<title>Users</title>
@section('content')
<h1 class="mt-4">Users</h1>
<!-- <ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol> -->

<div class="row mt-4">
    <div class="col-md-12">


        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <a href="{{route('admin.user-list')}}" class=" text-decoration-none"><h3 class="card-title text-dark">All Users</h3></a>

                <form action="{{route('user-search')}}" method="get">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" value="{{@$search}}" placeholder="Search">
                        <button type="submit" class="btn btn-success">Search</button>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-light  table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Alternate Number</th>
                                <th>Block</th>
                                <th>Flat No.</th>
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
                                <td>{{ $user->block }}</td>
                                <td>{{ $user->flat_no }}</td>
                                <td>
                                    <a class="m-1" data-bs-toggle="tooltip" data-bs-title="Visitor In" href="{{route('admin.add-visitor',$user->id)}}"><i class="fas fa-plus text-primary"></i></a>
                                    <a class="m-1" data-bs-toggle="tooltip" data-bs-title="Delete User" href="{{route('admin.user-delete',$user->id)}}"><i class="fa-solid fa-trash text-danger"></i></a>
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