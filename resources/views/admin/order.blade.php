@extends('admin.layoutadmin')

@section('content')
<div class="container my-5">
    <h2 class="mb-4 fw-bold text-success text-center animate__animated animate__fadeInDown">
        <i class="fa-solid fa-clipboard-list me-2"></i>Daftar Pesanan Masuk
    </h2>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
        <i class="fa-solid fa-check-circle me-2"></i>{{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card shadow border-0 animate__animated animate__fadeInUp">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle text-center">
                    <thead class="table-success text-white">
                        <tr class="align-middle">
                            <th><i class="fa-solid fa-user me-1"></i> Nama</th>
                            <th><i class="fa-solid fa-mug-hot me-1"></i> Produk</th>
                            <th><i class="fa-solid fa-layer-group me-1"></i> Jumlah</th>
                            <th><i class="fa-solid fa-map-marker-alt me-1"></i> Alamat</th>
                            <th><i class="fa-solid fa-clock me-1"></i> Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                        <tr class="bg-white border-bottom animate__animated animate__fadeIn">
                            <td class="text-capitalize fw-semibold text-dark">{{ $order->nama }}</td>
                            <td class="text-success fw-bold">{{ $order->produk }}</td>
                            <td>
                                <span class="badge bg-success bg-opacity-75 rounded-pill px-3 py-2">
                                    {{ $order->jumlah }}
                                </span>
                            </td>
                            <td class="text-muted">{{ $order->alamat }}</td>
                            <td class="text-secondary">
                                <small><i class="fa-regular fa-clock me-1"></i>{{ $order->created_at->format('d M Y, H:i') }}</small>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-muted text-center py-5">
                                <i class="fa-solid fa-box-open fa-2x mb-3 text-success"></i><br>
                                <span class="fs-5">Belum ada pesanan yang masuk.</span>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
