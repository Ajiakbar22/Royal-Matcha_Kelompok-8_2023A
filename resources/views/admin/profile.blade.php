@extends('admin.layoutadmin')

@section('title', 'Profil Saya')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-center">
        <div class="card shadow-lg p-4 rounded-4" style="max-width: 700px; width: 100%; border: none;">
            <div class="text-center">
                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=4CAF50&color=fff&size=150&rounded=true" 
                     class="rounded-circle mb-3 border border-3 border-success shadow" alt="Foto Profil">
                <h3 class="fw-bold mb-0">{{ Auth::user()->name }}</h3>
                <span class="badge bg-success mt-2">{{ Auth::user()->admin ? 'Admin' : 'User' }}</span>
            </div>

            <hr class="my-4">

            <div class="px-2">
                <div class="mb-3">
                    <h6 class="text-muted">Email</h6>
                    <p class="fs-5">{{ Auth::user()->email }}</p>
                </div>

                <div class="mb-3">
                    <h6 class="text-muted">Tanggal Bergabung</h6>
                    <p class="fs-5">{{ Auth::user()->created_at->format('d M Y') }}</p>
                </div>

                <div class="mb-3">
                    <h6 class="text-muted">Status Akun</h6>
                    <p class="fs-5">{{ Auth::user()->admin ? 'Administrator' : 'Pengguna Biasa' }}</p>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-success rounded-pill px-4 py-2">Edit Profil</a>
            </div>
        </div>
    </div>
</div>
@endsection
