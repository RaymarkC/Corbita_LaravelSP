<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #444;
        }
        .navbar {
            background: rgba(255, 255, 255, 0.9) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .content-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top mb-5">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="{{ url('/') }}">🎓 StudentPortal</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link fw-semibold mx-2" href="{{ url('/') }}">Home</a>
                <a class="nav-link fw-semibold mx-2" href="{{ url('/students') }}">Student List</a>
                <a class="nav-link btn btn-primary text-white px-3" href="{{ url('/students/create') }}">Add Student</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="content-card">
            @yield('content')
        </div>
    </div>
</body>
</html>