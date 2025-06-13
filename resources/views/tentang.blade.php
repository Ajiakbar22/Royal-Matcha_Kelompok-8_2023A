@extends('layout')

@section('content')
<section id="tentang" class="py-5 mt-5" style="background: linear-gradient(135deg, #f0fdf4 0%, #ffffff 100%);">
    <div class="container">
        <div class="row align-items-center gy-5">

            <!-- Teks -->
            <div class="col-lg-6 order-lg-1 order-2 animate__animated animate__fadeInLeft">
                <h2 class="fw-bold text-success mb-4" style="font-size: 2.5rem;">
                    <i class="fas fa-seedling me-2 text-success"></i>Kenapa Royal Matcha?
                </h2>
                <p class="fs-5 text-secondary mb-4" style="line-height: 1.8;">
                    <strong>Royal Matcha</strong> bukan sekadar minuman, melainkan <em>ritual harian</em> yang menenangkan jiwa. Matcha kami dipilih dari <span class="text-success fw-semibold">daun teh hijau terbaik Jepang</span>, dan diproses secara tradisional untuk menjaga cita rasa, warna alami, dan manfaat kesehatan.
                </p>
                <ul class="list-unstyled fs-5 text-muted">
                    <li class="d-flex align-items-start mb-3">
                        <i class="fas fa-leaf text-success me-3 mt-1"></i> 100% Organik & Tanpa Pengawet
                    </li>
                    <li class="d-flex align-items-start mb-3">
                        <i class="fas fa-mug-hot text-success me-3 mt-1"></i> Rasa Autentik, Aroma Menenangkan
                    </li>
                    <li class="d-flex align-items-start">
                        <i class="fas fa-heart text-success me-3 mt-1"></i> Diproses dengan Cinta & Kualitas Premium
                    </li>
                </ul>
            </div>

            <!-- Gambar -->
            <div class="col-lg-6 order-lg-2 order-1 animate__animated animate__zoomIn text-center">
                <div class="position-relative d-inline-block shadow-lg rounded-4 overflow-hidden" style="max-width:700px;">
                    <img src="{{ asset('storage/image/MatchaDB.jpeg') }}" alt="Royal Matcha" class="img-fluid" style="border-radius: 12px;">
                    <div class="position-absolute top-0 start-0 bg-success text-white fw-bold px-4 py-2 rounded-end-pill shadow-sm" style="margin: 15px;">
                        Sejak 2025 🍵
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
