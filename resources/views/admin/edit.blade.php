@extends('admin.layoutadmin')

@section('content')
<div class="container my-5">
    <h2 class="text-success mb-4">✏️ Edit Admin</h2>

    <form method="POST" action="{{ route('admin.update', $admin->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $admin->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Admin</label>
            <input type="email" class="form-control" name="email" value="{{ old('email', $admin->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi <small class="text-muted">(biarkan kosong jika tidak ingin diubah)</small></label>
            <input type="password" class="form-control" name="password" placeholder="Isi jika ingin ganti password">
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('admin.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
