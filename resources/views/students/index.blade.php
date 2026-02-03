@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">Student Directory</h2>
        <a href="{{ url('/students/create') }}" class="btn btn-primary shadow-sm">+ Add New Student</a>
    </div>

    {{-- Success Message Alert --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

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
                @forelse($students as $student)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                                {{ strtoupper(substr($student->name, 0, 1)) }}
                            </div>
                            <span class="fw-bold">{{ $student->name }}</span>
                        </div>
                    </td>
                    <td><span class="badge bg-success shadow-sm">{{ $student->course }}</span></td>
                    <td>{{ $student->year_level }}</td>
                    <td class="text-center">
                        <a href="{{ url('/students/' . $student->id) }}" class="btn btn-sm btn-outline-info rounded-pill px-3">View</a>
                        <a href="{{ url('/students/' . $student->id . '/edit') }}" class="btn btn-sm btn-outline-warning rounded-pill px-3">Edit</a>
                        
                        <form action="{{ url('/students/' . $student->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center py-5 text-muted">
                        No students found. Click "+ Add New Student" to start.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection