@extends('layouts.app-admin')

@section('content')

<div class="mb-6">
    <h1 class="text-3xl font-bold text-white">Edit Produk VPS</h1>
    <p class="text-sm text-gray-400">Ubah detail paket VPS sesuai kebutuhan</p>
</div>

<div class="bg-card-dark border border-gray-700 shadow-lg rounded-lg p-6">

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <!-- Nama Produk -->
        <div>
            <label class="block text-gray-300 mb-1">Nama Produk</label>
            <input type="text" name="name"
                value="{{ $product->name }}"
                class="w-full p-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring focus:ring-blue-600">
        </div>

        <!-- Spesifikasi -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label class="block text-gray-300 mb-1">CPU (Core)</label>
                <input type="number" name="cpu"
                    value="{{ $product->cpu }}"
                    class="w-full p-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring focus:ring-blue-600">
            </div>

            <div>
                <label class="block text-gray-300 mb-1">RAM (GB)</label>
                <input type="number" name="ram"
                    value="{{ $product->ram }}"
                    class="w-full p-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring focus:ring-blue-600">
            </div>

            <div>
                <label class="block text-gray-300 mb-1">Storage (GB)</label>
                <input type="number" name="storage"
                    value="{{ $product->storage }}"
                    class="w-full p-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring focus:ring-blue-600">
            </div>
        </div>

        <!-- Bandwidth -->
        <div>
            <label class="block text-gray-300 mb-1">Bandwidth</label>
            <input type="text" name="bandwidth"
                value="{{ $product->bandwidth }}"
                class="w-full p-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring focus:ring-blue-600">
        </div>

        <!-- Harga -->
        <div>
            <label class="block text-gray-300 mb-1">Harga (Rp)</label>
            <input type="number" name="price"
                value="{{ $product->price }}"
                class="w-full p-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring focus:ring-blue-600">
        </div>

        <!-- Deskripsi -->
        <div>
            <label class="block text-gray-300 mb-1">Deskripsi</label>
            <textarea name="description"
                rows="4"
                class="w-full p-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring focus:ring-blue-600">{{ $product->description }}</textarea>
        </div>

        <!-- Tombol Update -->
        <button
            class="bg-green-600 hover:bg-green-700 px-6 py-3 text-white rounded-lg shadow-md transition font-semibold">
            Update Produk
        </button>

    </form>
</div>

@endsection
