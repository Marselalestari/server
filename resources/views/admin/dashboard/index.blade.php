@extends('layouts.app-admin')

@section('title', 'Dashboard Admin')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

    <!-- Manajemen Pengguna -->
    <div class="dashboard-card p-5 rounded-xl">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold">Manajemen Pengguna</h3>
            <i class="fas fa-users text-accent-purple text-2xl"></i>
        </div>
        <p class="text-3xl font-bold mt-3">{{ $totalUsers }}</p>
        <p class="text-sm text-gray-400 mt-1">Pengguna terdaftar</p>
    </div>
{{-- 
    <!-- Total VPS -->
    <div class="dashboard-card p-5 rounded-xl">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold">Total Request VPS</h3>
            <i class="fas fa-server text-accent-purple text-2xl"></i>
        </div>
        <p class="text-3xl font-bold mt-3">{{ $totalVps }}</p>
        <p class="text-sm text-gray-400 mt-1">Semua status</p>
    </div>

    <!-- Order Masuk -->
    <div class="dashboard-card p-5 rounded-xl">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold">Order Masuk</h3>
            <i class="fas fa-shopping-cart text-accent-purple text-2xl"></i>
        </div>
        <p class="text-3xl font-bold mt-3">{{ $totalOrders }}</p>
        <p class="text-sm text-gray-400 mt-1">Total order</p>
    </div>

    <!-- Produk -->
    <div class="dashboard-card p-5 rounded-xl">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold">Produk</h3>
            <i class="fas fa-box text-accent-purple text-2xl"></i>
        </div>
        <p class="text-3xl font-bold mt-3">{{ $totalProducts }}</p>
        <p class="text-sm text-gray-400 mt-1">Produk aktif</p>
    </div>

    <!-- Transaksi -->
    <div class="dashboard-card p-5 rounded-xl">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold">Transaksi</h3>
            <i class="fas fa-money-check text-accent-purple text-2xl"></i>
        </div>
        <p class="text-3xl font-bold mt-3">{{ $totalBilling }}</p>
        <p class="text-sm text-gray-400 mt-1">Tagihan masuk</p>
    </div>

    <!-- Tiket Support -->
    <div class="dashboard-card p-5 rounded-xl">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-semibold">Tiket Support</h3>
            <i class="fas fa-ticket-alt text-accent-purple text-2xl"></i>
        </div>
        <p class="text-3xl font-bold mt-3">{{ $totalTickets }}</p>
        <p class="text-sm text-gray-400 mt-1">Menunggu balasan</p>
    </div>

</div>

@endsection
