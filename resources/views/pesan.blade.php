@extends('layout')

@section('content')
<h2 class="mb-4">📝 Form Pemesanan</h2>

<div class="card shadow-sm p-4">
  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <form action="{{ route('orders.store') }}" method="POST" id="orderForm">
    @csrf
    <div class="mb-3">
      <label class="form-label">Nama Produk</label>
      <input type="text" class="form-control" name="produk" value="{{ $product->name }}" readonly>
    </div>
    <div class="mb-3">
    <label class="form-label">Nama Pemesan</label>
    @if(Auth::check())
        <input type="text" class="form-control" name="nama" value="{{ Auth::user()->name }}" readonly>
    @else
        <input type="text" class="form-control" name="nama" required>
    @endif
    </div>
    <div class="mb-3">
      <label class="form-label">Alamat</label>
      <textarea class="form-control" name="alamat" rows="3" required></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">Harga</label>
      <input type="text" class="form-control" value="Rp {{ number_format($product->price, 0, ',', '.') }}" readonly>
    </div>
    <div class="mb-3">
      <label class="form-label">Jumlah</label>
      <input type="number" class="form-control" name="jumlah" min="1" required>
    </div>

    <div class="d-flex gap-2">
      <button type="button" class="btn btn-success" onclick="sendToWhatsApp()">Kirim via WhatsApp</button>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>
</div>

<script>
  function sendToWhatsApp() {
    let produk = document.querySelector('[name="produk"]').value;
    let nama = document.querySelector('[name="nama"]').value;
    let alamat = document.querySelector('[name="alamat"]').value;
    let jumlah = document.querySelector('[name="jumlah"]').value;

    let nomorAdmin = '6282230389323'; // Ganti nomor admin di sini
    let pesan = `Halo kak, saya ingin memesan:%0AProduk: ${produk}%0AJumlah: ${jumlah}%0ANama: ${nama}%0AAlamat: ${alamat}`;
    let url = `https://wa.me/${nomorAdmin}?text=${pesan}`;

    window.open(url, '_blank');
  }
</script>
@endsection
