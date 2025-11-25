@extends('layouts.app-admin')

@section('title', 'Dashboard Admin')

@section('content')

<div class="mb-8">
    <h1 class="text-3xl font-bold text-white">Dashboard Admin</h1>
    <p class="text-gray-300 text-sm mt-1">Selamat datang, {{ Auth::user()->name }} 👋</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

    <div class="dashboard-card p-5 rounded-xl">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold">Total Pengguna</h3>
            <i class="fas fa-users text-accent-purple text-2xl"></i>
        </div>
        <p class="text-3xl font-bold mt-3">124</p>
        <p class="text-sm text-gray-400 mt-1">Aktif bulan ini</p>
    </div>

    <div class="dashboard-card p-5 rounded-xl">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold">Total VPS</h3>
            <i class="fas fa-server text-accent-purple text-2xl"></i>
        </div>
        <p class="text-3xl font-bold mt-3">58</p>
        <p class="text-sm text-gray-400 mt-1">Digunakan pengguna</p>
    </div>

    <div class="dashboard-card p-5 rounded-xl">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold">Order Masuk</h3>
            <i class="fas fa-shopping-cart text-accent-purple text-2xl"></i>
        </div>
        <p class="text-3xl font-bold mt-3">17</p>
        <p class="text-sm text-gray-400 mt-1">Dalam 7 hari terakhir</p>
    </div>

    <div class="dashboard-card p-5 rounded-xl">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold">Produk</h3>
            <i class="fas fa-box text-accent-purple text-2xl"></i>
        </div>
        <p class="text-3xl font-bold mt-3">12</p>
        <p class="text-sm text-gray-400 mt-1">Produk aktif</p>
    </div>

    <div class="dashboard-card p-5 rounded-xl">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold">Transaksi</h3>
            <i class="fas fa-money-check text-accent-purple text-2xl"></i>
        </div>
        <p class="text-3xl font-bold mt-3">48</p>
        <p class="text-sm text-gray-400 mt-1">Sukses diproses</p>
    </div>

    <div class="dashboard-card p-5 rounded-xl">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold">Tiket Support</h3>
            <i class="fas fa-ticket-alt text-accent-purple text-2xl"></i>
        </div>
        <p class="text-3xl font-bold mt-3">6</p>
        <p class="text-sm text-gray-400 mt-1">Menunggu balasan</p>
    </div>

</div>

@endsection
