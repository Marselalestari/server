@extends('layouts.admin')

@section('title', 'Edit VPS')

@section('content')

<h2 class="text-2xl font-bold text-white mb-6">Edit VPS</h2>

<form action="{{ route('admin.vps.update', $vps->id) }}" method="POST" class="space-y-4">
    @csrf @method('PUT')

    <div>
        <label class="text-gray-300">Pemilik (User)</label>
        <select name="user_id" class="w-full p-2 rounded bg-card-dark text-white">
            <option value="">— Tidak ada —</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}" 
                    @if($vps->user_id == $user->id) selected @endif>
                        {{ $user->name }} ({{ $user->email }})
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="text-gray-300">Nama VPS</label>
        <input type="text" name="name" value="{{ $vps->name }}" class="w-full p-2 rounded bg-card-dark text-white">
    </div>

    <div class="grid grid-cols-3 gap-4">
        <div>
            <label class="text-gray-300">CPU (Core)</label>
            <input type="number" name="cpu" value="{{ $vps->cpu }}" class="w-full p-2 rounded bg-card-dark text-white">
        </div>

        <div>
            <label class="text-gray-300">RAM (GB)</label>
            <input type="number" name="ram" value="{{ $vps->ram }}" class="w-full p-2 rounded bg-card-dark text-white">
        </div>

        <div>
            <label class="text-gray-300">Storage (GB)</label>
            <input type="number" name="storage" value="{{ $vps->storage }}" class="w-full p-2 rounded bg-card-dark text-white">
        </div>
    </div>

    <div>
        <label class="text-gray-300">Harga (Rp)</label>
        <input type="number" name="price" value="{{ $vps->price }}" class="w-full p-2 rounded bg-card-dark text-white">
    </div>

    <button class="px-4 py-2 bg-accent-purple text-white rounded-lg hover:bg-purple-700">
        Perbarui
    </button>
</form>

@endsection
