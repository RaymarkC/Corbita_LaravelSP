@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">Student Directory</h2>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th class="py-3">Name</th>
                    <th class="py-3">Course</th>
                    <th class="py-3">Year Level</th>
                    <th class="py-3 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">JD</div>
                            <span class="fw-bold">Juan Dela Cruz</span>
                        </div>
                    </td>
                    <td><span class="badge bg-success shadow-sm">BSIT</span></td>
                    <td>3rd Year</td>
                    <td class="text-center">
                        <a href="{{ url('/students/1') }}" class="btn btn-sm btn-outline-info rounded-pill px-3">View</a>
                        <a href="{{ url('/students/1/edit') }}" class="btn btn-sm btn-outline-warning rounded-pill px-3">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection