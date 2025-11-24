@extends('layouts.admin')

@section('title', 'Tambah VPS')

@section('content')

<h2 class="text-2xl font-bold text-white mb-6">Tambah VPS</h2>

<form action="{{ route('admin.vps.store') }}" method="POST" class="space-y-4">
    @csrf

    <div>
        <label class="text-gray-300">Pemilik (User)</label>
        <select name="user_id" class="w-full p-2 rounded bg-card-dark text-white">
            <option value="">— Tidak ada —</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="text-gray-300">Nama VPS</label>
        <input type="text" name="name" class="w-full p-2 rounded bg-card-dark text-white">
    </div>

    <div class="grid grid-cols-3 gap-4">
        <div>
            <label class="text-gray-300">CPU (Core)</label>
            <input type="number" name="cpu" class="w-full p-2 rounded bg-card-dark text-white">
        </div>

        <div>
            <label class="text-gray-300">RAM (GB)</label>
            <input type="number" name="ram" class="w-full p-2 rounded bg-card-dark text-white">
        </div>

        <div>
            <label class="text-gray-300">Storage (GB)</label>
            <input type="number" name="storage" class="w-full p-2 rounded bg-card-dark text-white">
        </div>
    </div>

    <div>
        <label class="text-gray-300">Harga (Rp)</label>
        <input type="number" name="price" class="w-full p-2 rounded bg-card-dark text-white">
    </div>

    <button class="px-4 py-2 bg-accent-purple text-white rounded-lg hover:bg-purple-700">
        Simpan
    </button>
</form>

@endsection
