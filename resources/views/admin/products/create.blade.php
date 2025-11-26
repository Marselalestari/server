@extends('layouts.app-admin')

@section('content')

<div class="mb-6">
    <h1 class="text-3xl font-bold text-white">Tambah Produk VPS</h1>
    <p class="text-sm text-gray-400">Isi detail paket VPS yang ingin ditambahkan</p>
</div>

<div class="bg-card-dark border border-gray-700 shadow-lg rounded-lg p-6">

    <form action="{{ route('admin.products.store') }}" method="POST" class="space-y-5">
        @csrf

        <!-- Nama Produk -->
        <div>
            <label class="block text-gray-300 mb-1">Nama Produk</label>
            <input type="text" name="name"
                class="w-full p-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring focus:ring-blue-600"
                placeholder="Contoh: VPS Basic">
        </div>

        <!-- CPU, RAM, Storage -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label class="block text-gray-300 mb-1">CPU (Core)</label>
                <input type="number" name="cpu"
                    class="w-full p-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring focus:ring-blue-600"
                    placeholder="2">
            </div>

            <div>
                <label class="block text-gray-300 mb-1">RAM (GB)</label>
                <input type="number" name="ram"
                    class="w-full p-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring focus:ring-blue-600"
                    placeholder="4">
            </div>

            <div>
                <label class="block text-gray-300 mb-1">Storage (GB)</label>
                <input type="number" name="storage"
                    class="w-full p-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring focus:ring-blue-600"
                    placeholder="50">
            </div>
        </div>

        <!-- Bandwidth -->
        <div>
            <label class="block text-gray-300 mb-1">Bandwidth</label>
            <input type="text" name="bandwidth"
                class="w-full p-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring focus:ring-blue-600"
                placeholder="Unlimited / 1 TB">
        </div>

        <!-- Harga -->
        <div>
            <label class="block text-gray-300 mb-1">Harga (Rp)</label>
            <input type="number" name="price"
                class="w-full p-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring focus:ring-blue-600"
                placeholder="50000">
        </div>

        <!-- Deskripsi -->
        <div>
            <label class="block text-gray-300 mb-1">Deskripsi</label>
            <textarea name="description"
                class="w-full p-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring focus:ring-blue-600"
                rows="4"
                placeholder="Detail produk VPS..."></textarea>
        </div>

        <!-- Tombol Simpan -->
        <button
            class="bg-blue-600 hover:bg-blue-700 px-6 py-3 text-white rounded-lg shadow-md transition font-semibold">
            Simpan Produk
        </button>

    </form>
</div>

@endsection
