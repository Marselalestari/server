<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard ADMIN - HOSTVPS</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'main-dark': '#1A2138',
                        'card-dark': '#26304D',
                        'accent-purple': '#8E67F6',
                        'accent-orange': '#FF8A00',
                        'accent-yellow': '#FFC700',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    boxShadow: {
                        'neon-purple': '0 0 10px rgba(142, 103, 246, 0.7)',
                        'neon-orange': '0 0 10px rgba(255, 138, 0, 0.7)',
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #1A2138;
            background-image:
                linear-gradient(to right, rgba(142, 103, 246, 0.1) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(142, 103, 246, 0.1) 1px, transparent 1px);
            background-size: 40px 40px;
            font-family: 'Inter', sans-serif;
        }
        .sidebar-active {
            background-color: #37476B;
            border-right: 4px solid #8E67F6;
            color: white;
        }
        .dashboard-card {
            background-color: #26304D;
            border: 1px solid rgba(142, 103, 246, 0.2);
            transition: .3s;
        }
        .dashboard-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(142, 103, 246, 0.2);
        }
    </style>
</head>

<body class="text-white min-h-screen flex">


    <!-- ⚡ SIDEBAR ADMIN -->
    <div class="w-64 flex flex-col card-dark min-h-screen py-6 px-4 fixed top-0 left-0 z-10 shadow-lg">

        <div class="flex items-center space-x-2 mb-10 px-2">
            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none">
                <path d="M7.75 3L16.25 21M18.5 6L21 8.5L18.5 11M3 6L5.5 8.5L3 11"
                      stroke="#8E67F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="text-2xl font-bold">ADMIN VPS</span>
        </div>

        <nav class="flex-grow space-y-2 mb-12">

            <a href="#" class="flex items-center px-4 py-3 rounded-lg text-sm font-medium sidebar-active">
                <i class="fas fa-th-large mr-3"></i> Dashboard
            </a>

<a href="{{ route('admin.users.index') }}"
   class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-card-dark/50">
    <i class="fas fa-users mr-3"></i> Kelola Pengguna
</a>

            <a href="#" class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-card-dark/50">
                <i class="fas fa-server mr-3"></i> Kelola VPS
            </a>

            <a href="#" class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-card-dark/50">
                <i class="fas fa-clipboard-list mr-3"></i> Order VPS
            </a>

            <a href="#" class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-card-dark/50">
                <i class="fas fa-money-check-alt mr-3"></i> Transaksi Masuk
            </a>

            <a href="#" class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-card-dark/50">
                <i class="fas fa-chart-bar mr-3"></i> Laporan Penjualan
            </a>
        </nav>

        <div class="flex-grow"></div>

        <div class="space-y-2 border-t border-card-dark/50 pt-6 mt-6">
            <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-card-dark/50">
                <i class="fas fa-user-circle mr-3"></i> Profile
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="w-full flex items-center px-4 py-3 rounded-lg hover:bg-card-dark/50 text-left">
                    <i class="fas fa-sign-out-alt mr-3"></i> Logout
                </button>
            </form>
        </div>

        <div class="mt-8 text-center text-xs text-gray-400">
            <i class="fas fa-shield-alt mr-1"></i> Admin Panel
        </div>
    </div>


    <!-- ⚡ MAIN CONTENT -->
    <div class="flex-1 ml-64 p-6 md:p-10">

        <header class="flex justify-between items-center mb-10 py-2">
            <div>
                <h1 class="text-3xl font-bold">Dashboard Admin</h1>
                <p class="text-sm text-gray-400 mt-1">Halo Admin, selamat datang kembali 👋</p>
            </div>

            <div class="flex items-center space-x-4">

                <div class="relative">
                    <input type="text" placeholder="Cari Disini"
                           class="bg-card-dark text-white border border-accent-purple rounded-full
                           py-2 pl-10 pr-4 w-64 shadow-neon-purple">
                    <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                </div>

                <div class="relative w-10 h-10 rounded-full border-2 border-accent-orange overflow-hidden">
                    <img src="https://placehold.co/40x40/4D1D7C/FFFFFF?text=AD" class="object-cover w-full h-full">
                </div>
            </div>
        </header>


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

    </div>

</body>
</html>
