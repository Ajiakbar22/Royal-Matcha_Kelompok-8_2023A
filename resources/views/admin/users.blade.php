@extends('admin.layoutadmin')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4 text-success fw-bold">Daftar Pengguna</h1>

    <div class="card shadow-lg rounded-4 border-0">
        <div class="card-body p-4">
            <table class="table table-hover text-center align-middle">
                <thead class="table-success">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Status Admin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td class="fw-semibold text-dark">{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->admin)
                                <span class="badge bg-success">Ya</span>
                            @else
                                <span class="badge bg-secondary">Tidak</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #f3f8f2;
    }

    h1 {
        font-family: 'Poppins', sans-serif;
    }

    .card {
        background-color: #ffffff;
        border-radius: 20px;
    }

    .table thead th {
        font-weight: 600;
    }

    .table-hover tbody tr:hover {
        background-color: #e6f5e2;
        transition: 0.3s ease;
    }
</style>
@endsection
