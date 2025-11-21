@extends('layouts.admin')

@section('content')
<div class="p-6 md:p-10">

    <!-- TITLE -->
    <h2 class="text-3xl font-bold mb-8">Kelola Pengguna</h2>

    <!-- GRID USER -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach($users as $user)
        <div class="dashboard-card p-6 rounded-xl relative overflow-hidden group">

            <!-- ICON GHOST BACKGROUND (match dashboard) -->
            <i class="fas fa-users text-accent-purple text-opacity-20 absolute top-4 right-4 text-6xl"></i>

            <!-- ICON BADGE (sama gaya dashboard) -->
            <div class="bg-accent-purple/20 text-accent-purple p-3 rounded-full inline-block mb-4">
                <i class="fas fa-user"></i>
            </div>

            <!-- NAMA -->
            <h3 class="text-xl font-semibold">{{ $user->name }}</h3>
            <p class="text-gray-400 text-sm mb-4">{{ $user->email }}</p>

            <!-- VPS -->
            <div class="mb-4">
                <p class="text-gray-300 text-xs font-medium mb-1">VPS Dimiliki</p>

                @if($user->vps && $user->vps->count())
                    <ul class="text-gray-200 text-sm list-disc list-inside space-y-1">
                        @foreach($user->vps as $vps)
                        <li>{{ $vps->name }} — {{ $vps->cpu }} CPU / {{ $vps->ram }}GB RAM</li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-gray-500 text-sm">Belum ada VPS</p>
                @endif
            </div>

            <!-- ROLE -->
            <div class="mb-4">
                <span class="px-3 py-1 rounded-full text-xs
                    {{ $user->role === 'admin'
                        ? 'bg-accent-purple text-white'
                        : 'bg-purple-600 text-white' }}">
                    {{ ucfirst($user->role) }}
                </span>
            </div>

            <!-- BUTTON ACTION -->
            <div class="flex justify-end gap-2">

                <a href="{{ route('admin.users.edit', $user->id) }}"
                    class="px-4 py-2 bg-accent-purple text-white rounded-lg text-sm
                           hover:bg-purple-700 transition">
                    Edit
                </a>

                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button
                        class="px-4 py-2 bg-red-500 text-white rounded-lg text-sm
                               hover:bg-red-600 transition">
                        Hapus
                    </button>
                </form>

            </div>

        </div>
        @endforeach

    </div>

</div>
@endsection
