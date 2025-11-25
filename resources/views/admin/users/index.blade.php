{{-- @extends('layouts.admin')

@section('title', 'Kelola Pengguna')
@section('subtitle', 'Manajemen data pengguna sistem VPS')

@section('content')

<!-- ALERT SUKSES -->
@if(session('success'))
    <div class="p-4 mb-6 rounded-xl" style="background-color:#e0d4ff; color:#4b0082;">
        {{ session('success') }}
    </div>
@endif

<!-- CARD WRAPPER -->
<div class="bg-[#1F2847] p-6 rounded-2xl shadow-lg border border-[#2B3454]">

    <!-- HEADER BAR -->
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-white">Daftar Pengguna</h2>

        <a href="{{ route('admin.users.create') }}"
            class="px-4 py-2 rounded-lg bg-[#8E67F6] hover:bg-[#7a55d8] transition text-white font-medium shadow-md">
            <i class="fas fa-plus mr-2"></i> Tambah Pengguna
        </a>
    </div>

    <!-- TABLE -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-[#27304A] text-gray-300">
                <tr>
                    <th class="py-3 px-4">#</th>
                    <th class="py-3 px-4">Nama</th>
                    <th class="py-3 px-4">Email</th>
                    <th class="py-3 px-4">Role</th>
                    <th class="py-3 px-4">Total VPS</th>
                    <th class="py-3 px-4 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody class="text-gray-200">
                @forelse ($users as $user)
                    <tr class="border-b border-[#2F3958] hover:bg-[#2A3352] transition">
                        <td class="py-3 px-4">{{ $loop->iteration }}</td>
                        <td class="py-3 px-4">{{ $user->name }}</td>
                        <td class="py-3 px-4">{{ $user->email }}</td>

                        <td class="py-3 px-4 capitalize">
                            <span class="px-3 py-1 rounded-lg text-sm font-medium
                                @if($user->role == 'admin')
                                    bg-purple-600/30 text-purple-300
                                @elseif($user->role == 'operator')
                                    bg-blue-600/30 text-blue-300
                                @else
                                    bg-green-600/30 text-green-300
                                @endif
                            ">
                                {{ $user->role }}
                            </span>
                        </td>

                        <td class="py-3 px-4">
                            {{ $user->vps()->count() }} VPS
                        </td>

                        <td class="py-3 px-4 text-center">

                            <a href="{{ route('admin.users.edit', $user->id) }}"
                                class="px-3 py-1 rounded-lg bg-blue-600/30 text-blue-300 hover:bg-blue-600/40 transition">
                                <i class="fas fa-edit"></i>
                            </a>

                            <form action="{{ route('admin.users.destroy', $user->id) }}"
                                  method="POST"
                                  class="inline-block"
                                  onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="px-3 py-1 rounded-lg bg-red-600/30 text-red-300 hover:bg-red-600/40 transition">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-6 text-gray-400">
                            Tidak ada pengguna terdaftar.
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>

</div>

@endsection --}}



@extends('layouts.app-admin')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Users</h1>
    <a href="{{ route('admin.users.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah User</a>

    <table class="w-full bg-white shadow rounded">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Nama</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- Loop users --}}
            @foreach($users as $user)
            <tr>
                <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                <td class="border px-4 py-2">{{ $user->name }}</td>
                <td class="border px-4 py-2">{{ $user->email }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('admin.users.edit', $user->id) }}" class="text-blue-500">Edit</a>
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
