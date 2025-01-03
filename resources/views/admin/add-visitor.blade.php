@extends('layouts.admin')

<title>Add Visitor</title>
@section('content')
<h2 class="mt-4 text-center">Add Visitor Details</h2>


<div class="container mt-5">
    <form action="{{route('admin.visitor-store')}}" method="POST" class="mt-4">
        @csrf 


        <div class="mb-3">
            <label for="name" class="form-label">Visitor Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter visitor's name" required>
        </div>


        <div class="mb-3">
            <label for="contact" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter contact number" required>
        </div>

        
        <div class="mb-3">
            <label for="purpose" class="form-label">Purpose of Visit</label>
            <input type="text" class="form-control" id="purpose" name="purpose" placeholder="Reason for visit" required>
        </div>


        <div class="mb-3">
            <!-- <label for="flat_number" class="form-label">Flat Number</label> -->
            <input type="text" class="form-control d-none" id="user_id" value="{{$user_id}}" name="user_id" placeholder="Enter flat number" required>
        </div>

        
        <div class="mb-3">
            <label for="in_time" class="form-label">In-Time</label>
            <input type="time"  class="form-control" id="in_time" name="in_time" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date of Visit</label>
            <input type="date" class="form-control" value="{{ \Carbon\Carbon::now()->setTimezone('Asia/Kolkata')->format('Y-m-d') }}" id="date" name="date_of_visit" required>
        </div>
       


        <button type="submit" class="btn btn-primary">Add Visitor</button>
    </form>
</div>

@endsection