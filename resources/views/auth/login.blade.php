@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <h3 class="mb-4">Login</h3>
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <form action="/login" method="POST">
            @csrf
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required autofocus>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button class="btn btn-success w-100">Login</button>
        </form>
        <p class="mt-3 text-center">Belum punya akun? <a href="/register">Daftar</a></p>
    </div>
</div>
@endsection
