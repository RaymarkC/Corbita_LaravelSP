@extends('layout')

@section('content')
    <h2 class="fw-bold text-primary mb-4">Register New Student</h2>

    {{-- 1. Added POST method and action to the form --}}
    <form action="{{ url('/students') }}" method="POST" class="row g-3">
        @csrf {{-- 2. Added CSRF Token for security --}}

        <div class="col-md-6 form-floating mb-3">
            {{-- 3. Added name="name" --}}
            <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
            <label for="name" class="ms-2">Full Name</label>
        </div>

        <div class="col-md-6 form-floating mb-3">
            {{-- 4. Changed to Course to match your migration and added name="course" --}}
            <input type="text" name="course" class="form-control" id="course" placeholder="Course" required>
            <label for="course" class="ms-2">Course (e.g., BSIT)</label>
        </div>

        <div class="col-md-6 form-floating mb-3">
            {{-- 5. Added Year Level and name="year_level" --}}
            <input type="text" name="year_level" class="form-control" id="year_level" placeholder="Year Level" required>
            <label for="year_level" class="ms-2">Year Level (e.g., 3rd Year)</label>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary px-5 py-2 shadow">Save Student Profile</button>
            <a href="{{ url('/students') }}" class="btn btn-light px-5 py-2">Cancel</a>
        </div>
    </form>
@endsection