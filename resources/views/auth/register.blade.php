@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <h3 class="mb-4">Daftar Akun</h3>
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    <div>{{ $err }}</div>
                @endforeach
            </div>
        @endif
        <form action="/register" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>
            <button class="btn btn-success w-100">Daftar</button>
        </form>
        <p class="mt-3 text-center">Sudah punya akun? <a href="/login">Login</a></p>
    </div>
</div>
@endsection
