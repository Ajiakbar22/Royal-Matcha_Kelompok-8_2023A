@extends('layout')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="text-center mb-5 fw-bold text-success animate__animated animate__fadeInDown">
            🍃 Menu Royal Matcha
        </h1>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            @php
                $produkList = [
                    ['judul' => 'Matcha Latte', 'harga' => 25000, 'gambar' => 'Matcha Latte.jpeg', 'deskripsi' => 'Matcha lembut dengan susu segar, menyegarkan setiap tegukan.'],
                    ['judul' => 'Matcha Frappe', 'harga' => 28000, 'gambar' => 'Mtacha Frappe.jpg', 'deskripsi' => 'Perpaduan matcha premium dan es blended, cocok untuk cuaca panas.'],
                    ['judul' => 'Matcha Original', 'harga' => 22000, 'gambar' => 'MatchaOri.jpg', 'deskripsi' => 'Matcha otentik tanpa campuran, rasa matcha yang kuat dan khas.'],
                    ['judul' => 'Iced Matcha', 'harga' => 24000, 'gambar' => 'Iced Matcha.jpg', 'deskripsi' => 'Matcha dingin segar, cocok untuk menemani harimu yang cerah.'],
                    ['judul' => 'Hot Matcha', 'harga' => 25000, 'gambar' => 'Hot Matchaa.jpeg', 'deskripsi' => 'Hangatnya matcha murni, pas untuk menemani waktu santaimu.'],
                    ['judul' => 'Milk Matcha', 'harga' => 24000, 'gambar' => 'Milk Matcha.jpg', 'deskripsi' => 'Matcha dicampur milk yang creamy dan ringan.'],
                    ['judul' => 'Matcha Choco', 'harga' => 25000, 'gambar' => 'Matcha Choco.jpg', 'deskripsi' => 'Perpaduan matcha dan cokelat, manis dan creamy di lidah.'],
                    ['judul' => 'Matcha Cream', 'harga' => 22000, 'gambar' => 'Matcha Cream.jpg', 'deskripsi' => 'Matcha dengan topping whipped cream lembut di atasnya.'],
                    ['judul' => 'Matcha Float', 'harga' => 24000, 'gambar' => 'Matcha Float.jpg', 'deskripsi' => 'Matcha segar dengan topping ice cream vanilla lembut.'],
                    
                ];
            @endphp

            @foreach ($produkList as $produk)
            <div class="col animate__animated animate__fadeInUp">
                <div class="card border-0 shadow-sm h-100 product-card rounded-4 overflow-hidden">
                    <img src="{{ asset('storage/image/' . $produk['gambar']) }}" class="card-img-top" alt="{{ $produk['judul'] }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold text-success">{{ $produk['judul'] }}</h5>
                        <p class="card-text text-muted mb-4">{{ $produk['deskripsi'] }}</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                            <span class="fw-bold text-success">Rp{{ number_format($produk['harga'], 0, ',', '.') }}</span>
                            <a href="{{ url('/pesan?produk=' . urlencode($produk['judul'])) }}" class="btn btn-outline-success btn-sm rounded-pill">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection
