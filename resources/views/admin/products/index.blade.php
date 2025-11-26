@extends('layouts.app-admin')

@section('content')
<div class="mb-6">
    <h1 class="text-3xl font-bold text-white">Daftar Produk VPS</h1>
    <p class="text-sm text-gray-400">Kelola semua paket VPS yang tersedia</p>
</div>

<a href="{{ route('admin.products.create') }}" 
   class="bg-blue-600 hover:bg-blue-700 px-4 py-2 text-white rounded-lg mb-4 inline-block shadow">
    + Tambah Produk VPS
</a>

<div class="bg-card-dark shadow-lg rounded-lg border border-gray-700 mt-4">
    <table class="w-full text-left">
        <thead>
            <tr class="bg-gray-800 text-gray-300">
                <th class="px-4 py-3">Nama</th>
                <th class="px-4 py-3">CPU</th>
                <th class="px-4 py-3">RAM</th>
                <th class="px-4 py-3">Storage</th>
                <th class="px-4 py-3">Harga</th>
                <th class="px-4 py-3">Aksi</th>
            </tr>
        </thead>

        <tbody class="text-gray-200">
            @foreach($products as $product)
            <tr class="border-t border-gray-700 hover:bg-gray-800/60 transition">
                <td class="px-4 py-3 font-medium">{{ $product->name }}</td>
                <td class="px-4 py-3">{{ $product->cpu }} Core</td>
                <td class="px-4 py-3">{{ $product->ram }} GB</td>
                <td class="px-4 py-3">{{ $product->storage }} GB</td>
                <td class="px-4 py-3">Rp {{ number_format($product->price) }}</td>

                <td class="px-4 py-3 flex gap-4">
                    <a href="{{ route('admin.products.edit', $product->id) }}" 
                       class="text-blue-400 hover:text-blue-300 font-semibold">
                        Edit
                    </a>

                    <form method="POST" 
                          action="{{ route('admin.products.destroy', $product->id) }}">
                        @csrf 
                        @method('DELETE')
                        <button class="text-red-500 hover:text-red-400 font-semibold"
                                onclick="return confirm('Yakin ingin hapus produk ini?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
