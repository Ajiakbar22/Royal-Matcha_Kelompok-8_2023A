@extends('layout')

@section('content')

<!-- Hero Section -->
<section class="py-5 text-center bg-light shadow-sm" style="min-height: 100vh; display: flex; align-items: center;">
    <div class="container animate__animated animate__fadeInDown">
        <h1 class="display-4 fw-bold text-success mb-3">Selamat Datang di <span class="text-dark">Royal Matcha</span> 🍵</h1>
        <p class="lead text-secondary mb-4">Sensasi rasa matcha otentik langsung dari Jepang, dibuat dengan hati dari daun teh terbaik.</p>
        <a href="#keunggulan" class="btn btn-success btn-lg mt-3 px-5 py-3 rounded-pill shadow-sm"
           style="transition: all 0.3s ease;">
           Jelajahi Keunggulan
        </a>
    </div>
</section>

<!-- Highlight Keunggulan -->
<section id="keunggulan" class="bg-white py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold text-success">🌿 Kenapa Royal Matcha?</h2>
        <div class="row gy-4">
            <div class="col-md-4 animate__animated animate__fadeInUp">
                <div class="card border-0 shadow h-100 text-center p-4">
                    <i class="fas fa-award fa-3x text-success mb-3 icon-hover"></i>
                    <h5 class="fw-bold mb-3">Premium Quality</h5>
                    <p class="text-secondary">Bahan alami pilihan langsung dari perkebunan teh terbaik Jepang.</p>
                </div>
            </div>
            <div class="col-md-4 animate__animated animate__fadeInUp animate__delay-1s">
                <div class="card border-0 shadow h-100 text-center p-4">
                    <i class="fas fa-leaf fa-3x text-success mb-3 icon-hover"></i>
                    <h5 class="fw-bold mb-3">Rasa Autentik</h5>
                    <p class="text-secondary">Rasa khas matcha yang lembut, segar, dan menenangkan jiwa.</p>
                </div>
            </div>
            <div class="col-md-4 animate__animated animate__fadeInUp animate__delay-2s">
                <div class="card border-0 shadow h-100 text-center p-4">
                    <i class="fas fa-box-open fa-3x text-success mb-3 icon-hover"></i>
                    <h5 class="fw-bold mb-3">Pengemasan Elegan</h5>
                    <p class="text-secondary">Desain modern & eksklusif, cocok dijadikan hadiah atau koleksi pribadi.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="text-center py-5 bg-success bg-opacity-10">
    <div class="container animate__animated animate__fadeInUp">
        <h3 class="fw-semibold mb-4 text-success">Siap menikmati secangkir ketenangan yang otentik?</h3>
        <a href="{{ url('/products') }}" class="btn btn-success btn-lg px-5 py-3 rounded-pill shadow"
           style="transition: all 0.3s ease;">
           Pesan Sekarang
        </a>
    </div>
</section>

<!-- Custom CSS -->
<style>
    .icon-hover {
        transition: transform 0.3s ease;
        cursor: default;
    }
    .icon-hover:hover {
        transform: scale(1.2) rotate(10deg);
        cursor: pointer;
    }

    a.btn-success:hover {
        box-shadow: 0 8px 15px rgba(25, 135, 84, 0.4);
        transform: translateY(-3px);
    }
</style>

@endsection
