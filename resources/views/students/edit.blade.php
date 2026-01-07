@extends('layout')

@section('content')
    <h2>Edit Student</h2>
    <form class="col-md-6 border p-4 bg-white">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" value="Juan Dela Cruz">
        </div>
        <div class="mb-3">
            <label class="form-label">Course</label>
            <input type="text" class="form-control" value="BSIT">
        </div>
        <button type="button" class="btn btn-primary">Update</button>
        <a href="{{ url('/students') }}" class="btn btn-danger">Cancel</a>
    </form>
@endsection