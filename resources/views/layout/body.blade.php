<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- ✅ Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Sidebar custom styles */
    .sidebar {
      min-height: calc(100vh - 56px - 56px); /* full height minus navbar & footer */
      background-color: #f8f9fa;
      padding-top: 1rem;
    }

    .sidebar a {
      display: block;
      padding: 10px 15px;
      color: #333;
      text-decoration: none;
    }

    .sidebar a:hover {
      background-color: #e9ecef;
      color: #0d6efd;
    }

    .main-content {
      padding: 1.5rem;
      background-color: #fff;
    }

    footer {
      background-color: #343a40;
      color: #fff;
      text-align: center;
      padding: 1rem 0;
    }
  </style>
</head>
<body>

  <!-- ✅ Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Sample Website</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('/about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('/contact') }}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ✅ Main Layout -->
  <div class="container-fluid">
    <div class="row">
      
      <!-- Sidebar -->
      <nav class="col-md-3 col-lg-2 d-md-block sidebar">
        <div class="position-sticky">
          <ul class="nav flex-column">
            <li class="nav-item"><a href="{{url("getdata")}}" class="nav-link">DATA</a></li>
            <li class="nav-item"><a href="{{url('addtable')}}" class="nav-link">ADDDATA</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Settings</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Logout</a></li>
          </ul>
        </div>
      </nav>

      <!-- Main content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 main-content">
        <div class="content">
        @yield('content')
        </div>
      </main>

    </div>
  </div>

  <!-- ✅ Footer -->
  <footer>
    <div class="container">
      <p class="mb-0">&copy; 2025 My Website. All rights reserved.</p>
    </div>
  </footer>

  <!-- ✅ Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
