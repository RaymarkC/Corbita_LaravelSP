@extends('layout')

@section('content')
    <div class="text-center py-5">
        <span class="badge bg-soft-primary text-primary px-3 py-2 mb-3" style="background: #eef2ff;">System Online</span>
        <h1 class="display-4 fw-bold text-dark">Welcome to the Student Portal</h1>
        <p class="lead text-muted mb-4">Manage your educational records with ease and style.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="{{ url('/students') }}" class="btn btn-primary btn-lg px-5 shadow">Get Started</a>
            <button class="btn btn-outline-secondary btn-lg px-5">Learn More</button>
        </div>
    </div>
@endsection 