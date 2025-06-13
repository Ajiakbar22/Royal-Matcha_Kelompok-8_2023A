<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Royal Matcha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

    <style>
        body {
            background-color: #f4f5f7;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }
        /* Navbar */
        .navbar {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: saturate(180%) blur(10px);
            transition: background-color 0.3s ease;
            box-shadow: 0 2px 10px rgb(0 0 0 / 0.05);
        }
        .navbar-brand i {
            color: #198754;
        }
        .nav-modern {
            position: relative;
            font-weight: 600;
            color: #333;
            transition: color 0.3s ease;
        }
        .nav-modern::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 0;
            height: 3px;
            background-color: #198754;
            transition: width 0.3s ease;
            border-radius: 3px;
        }
        .nav-modern:hover,
        .nav-modern.active {
            color: #198754 !important;
        }
        .nav-modern:hover::after,
        .nav-modern.active::after {
            width: 100%;
        }
        .nav-link {
            padding: 0.5rem 1rem;
        }
        /* Footer */
        footer {
            background-color: #198754;
            color: #f8f9fa;
            padding: 40px 0 20px;
            font-size: 0.9rem;
        }
        footer h4, footer h5 {
            color: #e6f4ea;
            margin-bottom: 1rem;
        }
        footer a {
            color: #d0e9c6;
            text-decoration: none;
            transition: color 0.3s;
        }
        footer a:hover {
            color: #fff;
            text-decoration: underline;
        }
        footer .social-icons a {
            font-size: 1.4rem;
            margin-right: 15px;
            color: #d0e9c6;
            transition: color 0.3s;
        }
        footer .social-icons a:hover {
            color: #fff;
        }

        /* Product card hover effect */
        .product-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            transition: all 0.3s ease-in-out;
        }
        .product-card img {
            height: 250px;
            object-fit: cover;
            object-position: center;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
        }
        .product-card:hover img {
            transform: scale(1.05);
        }
        /* Responsive spacing */
        @media (max-width: 576px) {
            .navbar-nav {
                gap: 1rem !important;
            }
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

<style>
  /* Gradient background dengan shadow dan blur */
  nav.navbar {
    background: linear-gradient(135deg, #1fa45f, #198754);
    box-shadow: 0 8px 30px rgba(25, 135, 84, 0.6);
    backdrop-filter: saturate(180%) blur(12px);
    transition: background-color 0.5s ease;
    font-weight: 600;
    position: sticky;
    top: 0;
    z-index: 1030;
  }

  /* Brand style */
  .navbar-brand {
    color: #d1f7c4;
    font-weight: 700;
    font-size: 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    transition: transform 0.3s ease, color 0.3s ease;
  }

  .navbar-brand i {
    font-size: 1.8rem;
    filter: drop-shadow(0 0 3px #b3f0a2);
    transition: transform 0.4s ease;
  }

  .navbar-brand:hover {
    color: #e5f9db;
    transform: scale(1.05);
  }

  .navbar-brand:hover i {
    transform: rotate(15deg) scale(1.1);
  }

  /* Nav links container */
  .navbar-nav {
    gap: 1.5rem;
  }

  /* Nav link styling */
  .nav-link.nav-modern {
    color: #e6f4ea;
    font-weight: 600;
    position: relative;
    padding: 0.4rem 0;
    transition: color 0.4s ease, transform 0.3s ease;
    font-size: 1.1rem;
  }

  /* Hover & active */
  .nav-link.nav-modern:hover,
  .nav-link.nav-modern.active {
    color: #d1f7c4 !important;
    transform: scale(1.1);
  }

  /* Underline animation */
  .nav-link.nav-modern::after {
    content: "";
    position: absolute;
    bottom: -8px;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 3px;
    background: #b0f5a8;
    border-radius: 4px;
    transition: width 0.4s ease;
  }

  .nav-link.nav-modern:hover::after,
  .nav-link.nav-modern.active::after {
    width: 60%;
  }

  /* Hamburger icon */
  .navbar-toggler {
    border: none;
    outline: none;
  }

  .navbar-toggler i {
    color: #d1f7c4;
    font-size: 1.6rem;
    transition: color 0.3s ease, transform 0.3s ease;
  }

  .navbar-toggler:hover i {
    color: #a6e88a;
    transform: rotate(90deg);
  }

  /* Logout button style */
  .nav-modern.text-danger {
    border: 2px solid #ff4d4d;
    color: #ff6b6b !important;
    border-radius: 6px;
    padding: 0.3rem 0.7rem;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  .nav-modern.text-danger:hover {
    background-color: #ff4d4d;
    color: #fff !important;
    transform: scale(1.05);
  }
  .hover-shadow:hover {
    box-shadow: 0 0 25px rgba(0, 128, 0, 0.25) !important;
    transform: translateY(-4px);
    transition: all 0.3s ease;
  }
  .transition {
      transition: all 0.3s ease;
  }


  /* Responsive tweaks */
  @media (max-width: 576px) {
    .navbar-nav {
      gap: 1rem !important;
    }
  }
</style>

<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="{{ route('profile') }}">
      <i class="fa-solid fa-leaf"></i>Royal Matcha
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item">
          <a class="nav-link nav-modern {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-modern {{ Request::is('tentang') ? 'active' : '' }}" href="{{ url('/tentang') }}">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-modern {{ Request::is('products') ? 'active' : '' }}" href="{{ url('/products') }}">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-modern {{ Request::is('riwayat-pesanan') ? 'active' : '' }}" href="{{ route('riwayat.pesanan') }}">Riwayat Pesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-modern {{ Request::is('api-documentation') ? 'active' : '' }}" href="{{ route('api-documentation') }}">Api Documentation </a>
        </li>
        @auth
          <li class="nav-item">
            <a class="nav-link nav-modern text-danger" href="{{ url('/logout') }}">Logout</a>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link nav-modern" href="{{ url('/login') }}">Login</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>


<div class="container py-4">
    @yield('content')
</div>

<style>
  footer.bg-success {
    background: linear-gradient(135deg, #198754, #1fa45f);
    color: #e6f4ea;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
  }

  footer h4, footer h5 {
    color: #d0f0c0;
    font-weight: 700;
    margin-bottom: 1rem;
    text-transform: uppercase;
    letter-spacing: 1.5px;
  }

  footer p {
    line-height: 1.6;
    color: #c6e8b7;
  }

  footer a {
    color: #c6e8b7;
    text-decoration: none;
    transition: color 0.3s ease, transform 0.3s ease;
  }

  footer a:hover {
    color: #fff;
    text-decoration: underline;
    transform: scale(1.05);
  }

  /* Social icons */
  .social-icons a {
    font-size: 1.5rem;
    color: #c6e8b7;
    transition: color 0.3s ease, transform 0.3s ease;
  }

  .social-icons a:hover {
    color: #e0f9b5;
    transform: scale(1.2) rotate(10deg);
  }

  /* Divider */
  hr {
    border-color: rgba(255, 255, 255, 0.2);
    margin-top: 2rem;
  }

  /* Footer bottom copyright */
  .text-center.small.text-light {
    font-weight: 400;
    letter-spacing: 0.05em;
    color: #d9f4c6;
  }

  /* Responsive spacing */
  @media (max-width: 576px) {
    footer .row > div {
      margin-bottom: 1.5rem;
    }
  }
</style>

<footer class="bg-success text-white mt-auto pt-4 pb-3">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6">
        <h4>Royal Matcha</h4>
        <p>
          Matcha premium berkualitas tinggi dari daun teh pilihan. Kami menghadirkan rasa otentik Jepang dalam setiap cangkir.
        </p>
        <div class="social-icons d-flex gap-3 mt-3">
          <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="Facebook">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://wa.me/6282230389323" target="_blank" rel="noopener" aria-label="WhatsApp">
            <i class="fab fa-whatsapp"></i>
          </a>
        </div>
      </div>

      <!-- Navigasi Tengah -->
      <div class="col-lg-4 col-md-6 text-center">
        <h5>Navigasi</h5>
        <ul class="list-unstyled d-flex flex-column gap-2 align-items-center">
          <li><a href="{{ url('/') }}" class="text-white text-decoration-none">Beranda</a></li>
          <li><a href="{{ url('/products') }}" class="text-white text-decoration-none">Daftar Menu</a></li>
          <li><a href="{{ url('/tentang') }}" class="text-white text-decoration-none">Tentang Kami</a></li>
          <li><a href="{{ url('/login') }}" class="text-white text-decoration-none">Login</a></li>
        </ul>
      </div>

      <!-- Kontak di Kanan tapi agak geser kanan -->
      <div class="col-lg-3 col-md-12 ms-lg-auto">
        <h5>Kontak Kami</h5>
        <p><i class="fas fa-phone me-2"></i>0812-3456-7890</p>
        <p><i class="fas fa-envelope me-2"></i>royalmatcha@email.com</p>
        <p><i class="fas fa-map-marker-alt me-2"></i>Jl. Teh Hijau No. 88, Bandung</p>
      </div>
    </div>

    <hr />
    <div class="text-center small text-light mt-3">
      &copy; {{ date('Y') }} <strong>Royal Matcha</strong>. All rights reserved.
    </div>
  </div>
</footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</script>
</body>
</html>
