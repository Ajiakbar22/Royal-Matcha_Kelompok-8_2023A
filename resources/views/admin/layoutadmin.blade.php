<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Royal Matcha</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f5f7;
    }

    .sidebar {
      height: 100vh;
      background: linear-gradient(135deg, #198754, #1fa45f);
      color: #e6f4ea;
      position: fixed;
      width: 250px;
      top: 0;
      left: 0;
      padding: 1rem;
      box-shadow: 0 8px 20px rgba(25, 135, 84, 0.5);
      z-index: 100;
    }

    .sidebar .nav-link {
      color: #d0f0c0;
      font-weight: 500;
      margin: 0.5rem 0;
      transition: all 0.3s ease;
    }

    .sidebar .nav-link:hover,
    .sidebar .nav-link.active {
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 8px;
      color: #fff;
      transform: translateX(5px);
    }

    .sidebar .nav-link i {
      margin-right: 10px;
    }

    .main-content {
      margin-left: 250px;
      padding: 1.5rem;
    }

    .navbar {
      background: #fff;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
      margin-left: 250px;
    }

    .navbar-brand {
      font-weight: 700;
      color: #198754;
    }

    .logout-btn {
      color: #ff4d4d;
      font-weight: 600;
      transition: 0.3s;
    }

    .logout-btn:hover {
      color: #fff;
      background: #ff4d4d;
      border-radius: 6px;
      padding: 0.3rem 0.7rem;
    }
    .hover-shadow:hover {
    box-shadow: 0 0 25px rgba(0, 128, 0, 0.25) !important;
    transform: translateY(-4px);
    transition: all 0.3s ease;
    }
    .transition {
        transition: all 0.3s ease;
    }
    .product-card img {
    transition: transform 0.3s ease;
    }

    .product-card:hover img {
        transform: scale(1.05);
    }


  </style>
</head>
<body>

<div class="sidebar d-flex flex-column">
  <h4 class="mb-4"><i class="fa-solid fa-leaf"></i> Admin Royal Matcha</h4>
  <nav class="nav flex-column">
    <a href="{{ url('/admin/dashboard') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
      <i class="fa-solid fa-gauge"></i> Dashboard
    </a>
    <a href="{{ url('/admin/products') }}" class="nav-link {{ Request::is('admin/products*') ? 'active' : '' }}">
      <i class="fa-solid fa-mug-hot"></i> Menu
    </a>
    <a href="{{ url('/admin/orders') }}" class="nav-link {{ Request::is('admin/orders*') ? 'active' : '' }}">
      <i class="fa-solid fa-receipt"></i> Pesanan
    </a>
    </a>
    <a href="{{ url('/admin/users') }}" class="nav-link {{ Request::is('admin/users*') ? 'active' : '' }}">
      <i class="fa-solid fa-users"></i> Pengguna
    </a>
    <a href="{{ url('/logout') }}" class="nav-link logout-btn mt-3">
      <i class="fa-solid fa-right-from-bracket"></i> Logout
    </a>
  </nav>
</div>


<div class="main-content">
  @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
