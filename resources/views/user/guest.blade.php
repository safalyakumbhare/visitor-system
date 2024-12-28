@extends('layouts.user')
<title>View Guest</title>
@section('content')

<h1 class="mt-4 mb-4">Guests</h1>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Your Guests</h3>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Visitor Name</th>
                                        <th>Visitor Phone</th>
                                        <th>Purpose of Visit</th>
                                        <th>In time</th>
                                        <th>Out time</th>
                                        <th>Date of Visit</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($visitors as $guest)
                                    <tr>
                                        <td>{{ $guest->name }}</td>
                                        <td>{{ $guest->contact }}</td>
                                        <td>{{ $guest->purpose }}</td>
                                        <td>{{ date('h:i A', strtotime($guest->in_time)) }}</td>
                                        <td>
                                            @if($guest->out_time == '')
                                            <P>---</P>
                                            @else
                                            {{ date('h:i A',strtotime($guest->out_time)) }}
                                            @endif
                                        </td>
                                        <td>{{ date('d-m-Y',strtotime($guest->date_of_visit) )}}</td>
                                        <td>
                                    @if($guest->status == 'in')
                                    <span class="badge text-bg-success">In</span>
                                    @else
                                    <span class="badge text-bg-danger">Out</span>

                                    @endif


                                <td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>


@endsection