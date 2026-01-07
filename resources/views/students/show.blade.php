@extends('layout')

@section('content')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Student Profile</h5>
            <p class="card-text"><strong>Name:</strong> Juan Dela Cruz</p>
            <p class="card-text"><strong>Email:</strong> juan@example.com</p>
            <p class="card-text"><strong>Course:</strong> BSIT</p>
            <p class="card-text"><strong>Year Level:</strong> 3rd Year</p>
            <a href="{{ url('/students') }}" class="btn btn-secondary">Back to Student List</a>
        </div>
    </div>
@endsection