@extends('layout')

@section('content')
    <div class="card shadow-sm" style="width: 25rem;">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Student Profile</h5>
        </div>
        <div class="card-body">
            {{-- We use {{ $student->field }} to pull real data from MySQL --}}
            <p class="card-text"><strong>Name:</strong> {{ $student->name }}</p>
            
            {{-- Note: If you don't have an email column in your migration, you can remove this line --}}
            <p class="card-text"><strong>Course:</strong> {{ $student->course }}</p>
            
            <p class="card-text"><strong>Year Level:</strong> {{ $student->year_level }}</p>
            
            <hr>
            <div class="d-flex justify-content-between">
                <a href="{{ url('/students') }}" class="btn btn-secondary">Back to List</a>
                <a href="{{ url('/students/' . $student->id . '/edit') }}" class="btn btn-warning">Edit Profile</a>
            </div>
        </div>
    </div>
@endsection