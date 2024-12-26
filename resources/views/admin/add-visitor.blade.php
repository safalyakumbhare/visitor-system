@extends('layouts.admin')

<title>Add Visitor</title>
@section('content')


<div class="container mt-5">
    <form action="" method="POST" class="mt-4">
        @csrf <!-- Laravel CSRF token for security -->

        <!-- Visitor Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Visitor Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter visitor's name" required>
        </div>

        <!-- Visitor Contact -->
        <div class="mb-3">
            <label for="contact" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter contact number" required>
        </div>

        <!-- Purpose of Visit -->
        <div class="mb-3">
            <label for="purpose" class="form-label">Purpose of Visit</label>
            <input type="text" class="form-control" id="purpose" name="purpose" placeholder="Reason for visit" required>
        </div>

        <!-- Flat Number -->
        <div class="mb-3">
            <label for="flat_number" class="form-label">Flat Number</label>
            <input type="text" class="form-control" id="flat_number" name="flat_number" placeholder="Enter flat number" required>
        </div>

        <!-- In-Time -->
        <div class="mb-3">
            <label for="in_time" class="form-label">In-Time</label>
            <input type="time" class="form-control" id="in_time" name="in_time" required>
        </div>

        <!-- Out-Time (Optional) -->
        <div class="mb-3">
            <label for="out_time" class="form-label">Out-Time</label>
            <input type="time" class="form-control" id="out_time" name="out_time">
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Add Visitor</button>
    </form>
</div>

@endsection