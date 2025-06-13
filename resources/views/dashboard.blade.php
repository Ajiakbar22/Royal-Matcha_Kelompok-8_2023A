@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-4">
        <h1 class="fw-bold text-success">Selamat Datang, {{ Auth::user()->name }}! 🍵</h1>
        <p class="lead">Kelola produk dan pesanan Royal Matcha-mu dengan mudah.</p>
    </div>

    <!-- Statistik -->
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-4 bg-light py-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">Total Produk</h6>
                        <h2 class="fw-bold text-success">{{ $totalProducts }}</h2>
                    </div>
                    <i class="fa-solid fa-box fa-2x text-success opacity-50"></i>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-4 bg-light py-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">Total Pesanan</h6>
                        <h2 class="fw-bold text-warning">{{ $totalOrders }}</h2>
                    </div>
                    <i class="fa-solid fa-cart-shopping fa-2x text-warning opacity-50"></i>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-4 bg-light py-3">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">Total Pengguna</h6>
                        <h2 class="fw-bold text-info">{{ $totalUsers }}</h2>
                    </div>
                    <i class="fa-solid fa-users fa-2x text-info opacity-50"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Akses Admin -->
    <div class="row g-4">
        <div class="col-md-6">
            <a href="/products" class="text-decoration-none">
                <div class="card shadow-sm border-0 rounded-4 bg-white h-100 hover-shadow transition py-4">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-box fa-3x text-success mb-3"></i>
                        <h5 class="fw-bold text-success mb-2">Kelola Produk</h5>
                        <p class="text-muted mb-0">Tambah, edit, dan hapus produk Royal Matcha dengan mudah.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6">
            <a href="{{ route('orders.index') }}" class="text-decoration-none">
                <div class="card shadow-sm border-0 rounded-4 bg-white h-100 hover-shadow transition py-4">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-cart-shopping fa-3x text-success mb-3"></i>
                        <h5 class="fw-bold text-success mb-2">Kelola Pesanan</h5>
                        <p class="text-muted mb-0">Pantau pesanan anda secara real-time dan kelola statusnya.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
