@extends('admin.layoutadmin')

@section('content')
<div class="container my-5">
    <h2 class="text-success mb-4">👤 Daftar Admin</h2>
    <a href="{{ route('admin.create') }}" class="btn btn-success mb-3">+ Tambah Admin</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped table-hover text-center align-middle">
        <thead class="table-success">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Dibuat Pada</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
            <tr>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->created_at->format('d M Y H:i') }}</td>
                <td>
                    <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                    
                    <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus admin ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
