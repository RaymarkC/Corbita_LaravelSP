@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Edit Student Details</h2>
    <hr>
    
    {{-- 1. The action must point to the specific student's ID --}}
    <form action="{{ url('/students/' . $student->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- This tells Laravel you are UPDATING, not creating --}}

        <div class="mb-3">
            <label class="form-label">Full Name</label>
            {{-- 2. Add value="{{ $student->name }}" --}}
            <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Course</label>
            {{-- 3. Add value="{{ $student->course }}" --}}
            <input type="text" name="course" class="form-control" value="{{ $student->course }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Year Level</label>
            {{-- 4. Add value="{{ $student->year_level }}" --}}
            <input type="text" name="year_level" class="form-control" value="{{ $student->year_level }}" required>
        </div>

        <button type="submit" class="btn btn-warning">Update Student</button>
        <a href="{{ url('/students') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection