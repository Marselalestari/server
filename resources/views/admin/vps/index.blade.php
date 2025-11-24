@extends('layouts.admin')

@section('title', 'Kelola VPS')

@section('content')

<h2 class="text-2xl font-bold text-white mb-6">Kelola VPS</h2>

<a href="{{ route('admin.vps.create') }}" class="px-4 py-2 bg-accent-purple rounded-lg text-white hover:bg-purple-700">
    + Tambah VPS
</a>

@if(session('success'))
    <div class="mt-4 p-3 bg-green-700 rounded">{{ session('success') }}</div>
@endif

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">

    @foreach($vps as $item)
    <div class="dashboard-card p-6 rounded-xl">

        <h3 class="text-xl font-semibold text-white">{{ $item->name }}</h3>
        <p class="text-gray-300 mb-2">Pemilik: 
            @if($item->user)
                {{ $item->user->name }}
            @else
                <span class="text-gray-500">Tidak terhubung</span>
            @endif
        </p>

        <p class="text-gray-400 text-sm">CPU: {{ $item->cpu }} Core</p>
        <p class="text-gray-400 text-sm">RAM: {{ $item->ram }} GB</p>
        <p class="text-gray-400 text-sm">Storage: {{ $item->storage }} GB</p>
        <p class="text-gray-400 text-sm mb-4">Harga: Rp {{ number_format($item->price) }}</p>

        <div class="flex justify-end gap-2">
            <a href="{{ route('admin.vps.edit', $item->id) }}" 
               class="px-3 py-1 bg-accent-purple text-white rounded-lg hover:bg-purple-700">
               Edit
            </a>
            

            <form action="{{ route('admin.vps.destroy', $item->id) }}" method="POST">
                @csrf @method('DELETE')
                <button class="px-3 py-1 bg-red-500 text-white rounded-lg hover:bg-red-600">
                    Hapus
                </button>
            </form>
        </div>

    </div>
    @endforeach

</div>

@endsection
