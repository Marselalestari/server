@extends('layouts.admin')

@section('content')
<div class="p-6">

    <h2 class="text-2xl font-bold text-white mb-6">Kelola Pengguna</h2>

    <!-- GRID USER -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach($users as $user)
        <div class="dashboard-card p-6 rounded-xl relative overflow-hidden">

            <!-- ICON BESAR DI BACKGROUND -->
            <i class="fas fa-users text-accent-purple text-opacity-20 absolute top-4 right-4 text-6xl"></i>

            <!-- NAMA & EMAIL -->
            <h3 class="text-white font-semibold text-lg mb-1">{{ $user->name }}</h3>
            <p class="text-gray-400 text-sm mb-4">{{ $user->email }}</p>

            <!-- VPS USER -->
            <div class="mb-4">
                <p class="text-gray-300 text-sm mb-1 font-medium">VPS</p>
                @if($user->vps && $user->vps->count() > 0)
                    <ul class="text-gray-200 text-sm list-disc list-inside">
                        @foreach($user->vps as $vps)
                        <li>{{ $vps->name }} - {{ $vps->cpu }} CPU / {{ $vps->ram }} GB RAM</li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-gray-500 text-sm">Belum memiliki VPS</p>
                @endif
            </div>

            <!-- ROLE -->
            <div class="mb-4">
                @if($user->role === 'admin')
                    <span class="px-3 py-1 bg-accent-purple text-white rounded-full text-sm">Admin</span>
                @else
                    <span class="px-3 py-1 bg-purple-600 text-white rounded-full text-sm">User</span>
                @endif
            </div>

            <!-- ACTION -->
            <div class="flex justify-end gap-2 mt-4">
                <a href="{{ route('admin.users.edit', $user->id) }}"
                   class="px-3 py-1 bg-accent-purple text-white rounded-lg hover:bg-purple-700">
                    Edit
                </a>
                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="px-3 py-1 bg-red-500 text-white rounded-lg hover:bg-red-600">
                        Hapus
                    </button>
                </form>
            </div>

        </div>
        @endforeach

    </div>

</div>
@endsection
