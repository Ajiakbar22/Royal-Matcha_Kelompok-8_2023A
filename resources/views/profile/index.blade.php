@extends('layout')

@section('title', 'Profil Saya')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
      <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body p-4 text-center">
          {{-- Foto Profil --}}
          <div class="mb-4">
            <img src="{{ auth()->user()->profile_photo_url ?? 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) }}" 
                 alt="Foto Profil" class="rounded-circle" style="width:120px; height:120px; object-fit: cover; border: 3px solid #4CAF50;">
          </div>

          {{-- Nama User --}}
          <h3 class="fw-bold mb-1 text-success">{{ auth()->user()->name }}</h3>

          {{-- Email --}}
          <p class="text-muted mb-3">{{ auth()->user()->email }}</p>

          {{-- Info tambahan --}}
          <p>
            <span class="badge bg-success">User</span> &nbsp;
            <small class="text-muted">Bergabung sejak {{ auth()->user()->created_at->format('d M Y') }}</small>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
