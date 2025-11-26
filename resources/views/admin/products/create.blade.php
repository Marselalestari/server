@extends('layouts.app-admin')

@section('title', 'Tambah Produk')
@section('subtitle', 'Form tambah produk VPS')

@section('content')

@if(session('success'))
    <div class="p-4 mb-6 rounded-xl" style="background-color:#e0d4ff; color:#4b0082;">
        {{ session('success') }}
    </div>
@endif

<div class="bg-[#1F2847] p-6 rounded-2xl shadow-lg border border-[#2B3454] max-w-lg mx-auto">

    <h2 class="text-xl font-semibold text-white mb-6">Tambah Produk</h2>

    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block mb-1 text-gray-200 font-medium">Nama Produk</label>
            <input type="text" name="name" class="w-full p-2 rounded-lg border border-gray-600 bg-[#2B3454] text-white" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 text-gray-200 font-medium">CPU (Core)</label>
            <input type="number" name="cpu" id="cpu" class="w-full p-2 rounded-lg border border-gray-600 bg-[#2B3454] text-white" min="1" value="1">
        </div>

        <div class="mb-4">
            <label class="block mb-1 text-gray-200 font-medium">RAM (GB)</label>
            <input type="number" name="ram" id="ram" class="w-full p-2 rounded-lg border border-gray-600 bg-[#2B3454] text-white" min="1" value="1">
        </div>

        <div class="mb-4">
            <label class="block mb-1 text-gray-200 font-medium">Storage (GB)</label>
            <input type="number" name="storage" id="storage" class="w-full p-2 rounded-lg border border-gray-600 bg-[#2B3454] text-white" min="20" value="20">
        </div>

        <div class="mb-4">
            <label class="block mb-1 text-gray-200 font-medium">Harga</label>
            <input type="text" id="price" class="w-full p-2 rounded-lg border border-gray-600 bg-[#2B3454] text-white" readonly>
        </div>

        <button type="submit" class="px-4 py-2 rounded-lg bg-[#8E67F6] hover:bg-[#7a55d8] transition text-white font-medium shadow-md">
            <i class="fas fa-save mr-2"></i> Simpan
        </button>
    </form>
</div>

<script>
    function calculatePrice() {
        let cpu = parseInt(document.getElementById('cpu').value) || 0;
        let ram = parseInt(document.getElementById('ram').value) || 0;
        let storage = parseInt(document.getElementById('storage').value) || 0;

        let basePrice = 10000;
        let cpuPrice = 5000 * cpu;
        let ramPrice = 3000 * ram;
        let storagePrice = 200 * storage;

        let total = basePrice + cpuPrice + ramPrice + storagePrice;

        document.getElementById('price').value = 'Rp ' + total.toLocaleString();
    }

    document.getElementById('cpu').addEventListener('input', calculatePrice);
    document.getElementById('ram').addEventListener('input', calculatePrice);
    document.getElementById('storage').addEventListener('input', calculatePrice);

    calculatePrice();
</script>

@endsection
