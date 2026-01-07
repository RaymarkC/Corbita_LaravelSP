@extends('layout')

@section('content')
    <h2 class="fw-bold text-primary mb-4">Register New Student</h2>
    <form class="row g-3">
        <div class="col-md-6 form-floating mb-3">
            <input type="text" class="form-control" id="name" placeholder="Name">
            <label for="name" class="ms-2">Full Name</label>
        </div>
        <div class="col-md-6 form-floating mb-3">
            <input type="email" class="form-control" id="email" placeholder="Email">
            <label for="email" class="ms-2">Email Address</label>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary px-5 py-2 shadow">Save Student Profile</button>
            <a href="{{ url('/students') }}" class="btn btn-light px-5 py-2">Cancel</a>
        </div>
    </form>
@endsection