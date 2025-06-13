@extends('layout')

@section('content')
<h3 class="mb-4">Edit Produk</h3>
<form action="/products/{{ $product->id }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Nama Produk</label>
        <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
    </div>
    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control">{{ $product->description }}</textarea>
    </div>
    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
    </div>
    <button class="btn btn-primary">Update</button>
    <a href="/products" class="btn btn-secondary">Kembali</a>
</form>
@endsection
