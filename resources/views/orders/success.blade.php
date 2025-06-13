@extends('layout')

@section('content')
<div class="container d-flex flex-column justify-content-center align-items-center" style="min-height: 70vh;">
    <h1 class="mb-3 text-success fw-bold" style="font-size: 3rem; animation: fadeInDown 1s ease;">Terima Kasih!</h1>
    <p class="mb-4 fs-5" style="animation: fadeInUp 1s ease;">Pesanan kamu berhasil disimpan 🍵✨</p>
    <a href="/" class="btn btn-success btn-lg px-4" style="animation: pulse 2s infinite;">Kembali ke Beranda</a>
</div>

<style>
@keyframes fadeInDown {
  0% {
    opacity: 0;
    transform: translateY(-30px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
@keyframes fadeInUp {
  0% {
    opacity: 0;
    transform: translateY(30px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
@keyframes pulse {
  0%, 100% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.05);
  }
}
</style>
@endsection
