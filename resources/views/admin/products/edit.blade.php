@extends('layouts.app-admin')

@section('title', 'Edit Produk VPS')
@section('subtitle', 'Form edit produk VPS')

@section('content')

@if(session('success'))
    <div class="p-4 mb-6 rounded-xl" style="background:#e0d4ff; color:#4b0082;">
        {{ session('success') }}
    </div>
@endif

<div class="bg-[#1F2847] p-6 rounded-2xl shadow-lg border border-[#2B3454] max-w-lg mx-auto">

    <h2 class="text-xl font-semibold text-white mb-6">Edit Produk VPS</h2>

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block mb-1 text-gray-200 font-medium">Nama Paket</label>
            <input type="text" name="name" class="w-full p-2 rounded-lg border border-gray-600 bg-[#2B3454] text-white" value="{{ $product->name }}" required>
        </div>

        <div>
            <label class="block mb-1 text-gray-200 font-medium">CPU (Core)</label>
            <input type="number" name="cpu" class="w-full p-2 rounded-lg border border-gray-600 bg-[#2B3454] text-white" value="{{ $product->cpu }}" required>
        </div>

        <div>
            <label class="block mb-1 text-gray-200 font-medium">RAM (GB)</label>
            <input type="number" name="ram" class="w-full p-2 rounded-lg border border-gray-600 bg-[#2B3454] text-white" value="{{ $product->ram }}" required>
        </div>

        <div>
            <label class="block mb-1 text-gray-200 font-medium">Storage (GB)</label>
            <input type="number" name="storage" class="w-full p-2 rounded-lg border border-gray-600 bg-[#2B3454] text-white" value="{{ $product->storage }}" required>
        </div>

        <div>
            <label class="block mb-1 text-gray-200 font-medium">Bandwidth (TB)</label>
            <input type="number" name="bandwidth" class="w-full p-2 rounded-lg border border-gray-600 bg-[#2B3454] text-white" value="{{ $product->bandwidth }}" required>
        </div>

        <div>
            <label class="block mb-1 text-gray-200 font-medium">Harga</label>
            <input type="number" name="price" class="w-full p-2 rounded-lg border border-gray-600 bg-[#2B3454] text-white" value="{{ $product->price }}" required>
        </div>

        <button type="submit" class="px-4 py-2 rounded-lg bg-[#8E67F6] hover:bg-[#7a55d8] transition text-white font-medium shadow-md">
            <i class="fas fa-save mr-2"></i> Update Produk
        </button>

    </form>
</div>

@endsection
