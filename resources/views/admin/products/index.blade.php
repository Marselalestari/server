@extends('layouts.app-admin')

@section('title', 'Daftar Produk')
@section('subtitle', 'Manajemen produk VPS')

@section('content')

@if(session('success'))
    <div class="p-4 mb-6 rounded-xl" style="background-color:#e0d4ff; color:#4b0082;">
        {{ session('success') }}
    </div>
@endif

<div class="bg-[#1F2847] p-6 rounded-2xl shadow-lg border border-[#2B3454]">

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-white">Daftar Produk</h2>
        <a href="{{ route('admin.products.create') }}"
           class="px-4 py-2 rounded-lg bg-[#8E67F6] hover:bg-[#7a55d8] transition text-white font-medium shadow-md">
            <i class="fas fa-plus mr-2"></i> Tambah Produk
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-[#27304A] text-gray-300">
                <tr>
                    <th class="py-3 px-4">#</th>
                    <th class="py-3 px-4">Nama</th>
                    <th class="py-3 px-4">CPU</th>
                    <th class="py-3 px-4">RAM</th>
                    <th class="py-3 px-4">Storage</th>
                    <th class="py-3 px-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-200">
                @forelse ($products as $product)
                    <tr class="border-b border-[#2F3958] hover:bg-[#2A3352] transition">
                        <td class="py-3 px-4">{{ $loop->iteration }}</td>
                        <td class="py-3 px-4">{{ $product->name }}</td>
                        <td class="py-3 px-4">{{ $product->cpu }}</td>
                        <td class="py-3 px-4">{{ $product->ram }}</td>
                        <td class="py-3 px-4">{{ $product->storage }}</td>
                        <td class="py-3 px-4 text-center">
                            <a href="{{ route('admin.products.edit', $product) }}"
                               class="px-3 py-1 rounded-lg bg-blue-600/30 text-blue-300 hover:bg-blue-600/40 transition">
                               <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.products.destroy', $product) }}"
                                  method="POST"
                                  class="inline-block"
                                  onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="px-3 py-1 rounded-lg bg-red-600/30 text-red-300 hover:bg-red-600/40 transition">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-6 text-gray-400">
                            Tidak ada produk tersedia.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection
