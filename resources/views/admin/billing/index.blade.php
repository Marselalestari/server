@extends('layouts.app-admin')

@section('title', 'Transaksi Billing')
@section('subtitle', 'Manajemen transaksi pembayaran')

@section('content')

{{-- ALERT SUKSES – warna wajib sama --}}
@if(session('success'))
    <div class="p-4 mb-6 rounded-xl" style="background-color:#e0d4ff; color:#4b0082;">
        {{ session('success') }}
    </div>
@endif

{{-- CARD UTAMA – warna sama seperti Produk & Request VPS --}}
<div class="bg-[#1F2847] p-6 rounded-2xl shadow-lg border border-[#2B3454]">

    {{-- HEADER --}}
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-white">Daftar Transaksi</h2>
    </div>

    {{-- TABLE --}}
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-[#27304A] text-gray-300">
                <tr>
                    <th class="py-3 px-4">#</th>
                    <th class="py-3 px-4">User</th>
                    <th class="py-3 px-4">Invoice</th>
                    <th class="py-3 px-4">Nominal</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4">Tanggal</th>
                </tr>
            </thead>
            <tbody class="text-gray-200">
                <tr>
                    <td colspan="6" class="text-center py-6 text-gray-400">
                        Belum ada transaksi.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

@endsection
