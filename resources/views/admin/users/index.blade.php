@extends('layouts.app-admin')

@section('title', 'Manajemen Pengguna')

@section('content')

<div class="mb-8">
    <h1 class="text-3xl font-bold text-white">Manajemen Pengguna</h1>
    <p class="text-gray-300 text-sm mt-1">Kelola akun pengguna yang terdaftar dalam sistem</p>
</div>

<div class="mb-6">
    <a href="{{ route('admin.users.create') }}" 
       class="px-4 py-2 bg-accent-purple text-white rounded-lg shadow hover:bg-accent-purple/80 transition">
        + Tambah Pengguna
    </a>
</div>

<div class="overflow-x-auto">
    <table class="w-full bg-card-dark shadow rounded-xl overflow-hidden text-white">
        <thead>
            <tr class="bg-card-dark/70 border-b border-gray-700">
                <th class="px-4 py-3 text-left">#</th>
                <th class="px-4 py-3 text-left">Nama</th>
                <th class="px-4 py-3 text-left">Email</th>
                <th class="px-4 py-3 text-left">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
            <tr class="border-b border-gray-800 hover:bg-card-dark/50 transition">
                <td class="px-4 py-3">{{ $loop->iteration }}</td>
                <td class="px-4 py-3">{{ $user->name }}</td>
                <td class="px-4 py-3">{{ $user->email }}</td>
                <td class="px-4 py-3 flex items-center space-x-4">

                    <!-- Tombol Edit -->
                    <a href="{{ route('admin.users.edit', $user->id) }}" 
                       class="text-blue-400 hover:text-blue-300 transition">
                        <i class="fas fa-edit"></i> Edit
                    </a>

                    <!-- Tombol Hapus -->
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" 
                          onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="text-red-400 hover:text-red-300 transition">
                            <i class="fas fa-trash"></i> Hapus
                        </button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
