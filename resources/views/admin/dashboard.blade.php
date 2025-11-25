@extends('layouts.app')

@section('title', 'Dashboard')
@section('subtitle', 'Halo Admin, selamat datang kembali 👋')

@section('content')
    <!-- ⚡ GRID KONTEN -->
     <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

        <!-- 4 CARD UTAMA -->
        <div class="lg:col-span-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="dashboard-card p-6 rounded-xl relative overflow-hidden">
                <i class="fas fa-users text-accent-purple text-opacity-20 absolute top-4 right-4 text-6xl"></i>
                <div class="bg-accent-purple/20 text-accent-purple p-3 rounded-full inline-block mb-4">
                    <i class="fas fa-user"></i>
                </div>
                <p class="text-3xl font-bold">152</p>
                <p class="text-gray-400">Total Pengguna</p>
            </div>

            <div class="dashboard-card p-6 rounded-xl relative overflow-hidden">
                <i class="fas fa-server text-accent-purple text-opacity-20 absolute top-4 right-4 text-6xl"></i>
                <div class="bg-accent-purple/20 text-accent-purple p-3 rounded-full inline-block mb-4">
                    <i class="fas fa-server"></i>
                </div>
                <p class="text-3xl font-bold">48</p>
                <p class="text-gray-400">Total VPS</p>
            </div>

            <div class="dashboard-card p-6 rounded-xl relative overflow-hidden">
                <i class="fas fa-money-bill text-accent-purple text-opacity-20 absolute top-4 right-4 text-6xl"></i>
                <div class="bg-accent-purple/20 text-accent-purple p-3 rounded-full inline-block mb-4">
                    <i class="fas fa-receipt"></i>
                </div>
                <p class="text-3xl font-bold">21</p>
                <p class="text-gray-400">Transaksi Baru</p>
            </div>

            <div class="dashboard-card p-6 rounded-xl relative overflow-hidden">
                <i class="fas fa-chart-line text-accent-purple text-opacity-20 absolute top-4 right-4 text-6xl"></i>
                <div class="bg-accent-purple/20 text-accent-purple p-3 rounded-full inline-block mb-4">
                    <i class="fas fa-chart-pie"></i>
                </div>
                <p class="text-3xl font-bold">12</p>
                <p class="text-gray-400">Laporan Baru</p>
            </div>

        </div>


        <!-- CARD STATUS PEMESANAN -->
        <!-- CARD STATUS PERSEGI PANJANG -->
        <div class="lg:col-span-4 dashboard-card p-6 rounded-2xl">

            <h3 class="font-semibold text-lg mb-4">Status Aktivitas Sistem</h3>

            <!-- Grid 2 kolom -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <!-- Status Server Utama -->
                <div class="flex items-center space-x-3 p-4 bg-card-dark/50 rounded-lg">
                    <div class="w-10 h-10 bg-blue-500/80 rounded-full flex items-center justify-center">
                        <i class="fas fa-server"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium">Server Utama</p>
                        <p class="text-xs text-gray-400">UpTime: 99.8%</p>
                    </div>
                    <span class="text-xs text-green-400 font-bold">Aktif</span>
                </div>

                <!-- Status Admin Login -->
                <div class="flex items-center space-x-3 p-4 bg-card-dark/50 rounded-lg">
                    <div class="w-10 h-10 bg-accent-orange/80 rounded-full flex items-center justify-center">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-medium">Admin Login</p>
                        <p class="text-xs text-gray-400">Akses terakhir</p>
                    </div>
                    <span class="text-xs text-yellow-400 font-bold">Cek</span>
                </div>

            </div>
        </div>

        <!-- ROW BAWAH: LAPORAN -->
        <div class="lg:col-span-4 dashboard-card p-6 rounded-xl">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-semibold text-xl">Laporan Penjualan Bulanan</h3>
                <button class="text-gray-400 hover:text-accent-purple">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
            </div>

            <p class="text-gray-400">Data laporan bulan ini.</p>
        </div>

    </div>
    
@endsection