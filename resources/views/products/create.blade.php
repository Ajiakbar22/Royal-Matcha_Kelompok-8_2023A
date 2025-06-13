@extends('layout')

@section('content')
<h3 class="mb-4">Tambah Produk</h3>
<form action="/products" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nama Produk</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="price" class="form-control" required>
    </div>
    <button class="btn btn-success">Simpan</button>
    <a href="/products" class="btn btn-secondary">Batal</a>
</form>
@endsection
 