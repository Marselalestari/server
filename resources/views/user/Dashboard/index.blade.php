<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard HOSTVPS - Pengguna</title>
    <!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Load Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        // PALET BIRU BARU
                        'main-dark': '#1A2138', // Background utama biru tua
                        'card-dark': '#26304D', // Background card/sidebar yang sedikit lebih terang
                        'accent-purple': '#8E67F6', // Aksen ungu cerah/neon
                        'accent-orange': '#FF8A00', // Aksen oranye untuk tombol/promo
                        'accent-yellow': '#FFC700', // Aksen kuning
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    boxShadow: {
                        'neon-purple': '0 0 10px rgba(142, 103, 246, 0.7), 0 0 20px rgba(142, 103, 246, 0.5)',
                        'sm-neon': '0 0 5px rgba(142, 103, 246, 0.5)',
                        'neon-orange': '0 0 10px rgba(255, 138, 0, 0.7)',
                    }
                },
            }
        }
    </script>

    <style>
        /* Menggunakan warna dasar biru tua */
        body {
            background-color: #1A2138;
            background-image: 
                linear-gradient(to right, rgba(142, 103, 246, 0.1) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(142, 103, 246, 0.1) 1px, transparent 1px);
            background-size: 40px 40px;
            font-family: 'Inter', sans-serif;
        }

        /* Style untuk sidebar aktif */
        .sidebar-active {
            background-color: #37476B; /* Warna aktif biru muda */
            border-right: 4px solid #8E67F6; /* Aksen ungu cerah */
            color: white;
            box-shadow: 0 0 10px rgba(142, 103, 246, 0.3);
        }

        /* Card effect */
        .dashboard-card {
            background-color: #26304D;
            border: 1px solid rgba(142, 103, 246, 0.2);
            transition: all 0.3s ease;
        }
        .dashboard-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(142, 103, 246, 0.2);
        }
    </style>
</head>
<body class="text-white min-h-screen flex">

    <!-- 1. Sidebar -->
    <!-- Mengganti bila-sidebar menjadi card-dark -->
    <div class="w-64 flex flex-col card-dark min-h-screen py-6 px-4 fixed top-0 left-0 z-10 shadow-lg">
        <!-- Logo -->
        <div class="flex items-center space-x-2 mb-10 px-2">
            <!-- Icon HOSTVPS -->
            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Mengganti stroke ke accent-purple -->
                <path d="M7.75 3L16.25 21M18.5 6L21 8.5L18.5 11M3 6L5.5 8.5L3 11" stroke="#8E67F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="text-2xl font-bold text-white">HOSTVPS</span>
        </div>

        <!-- Menu Atas -->
        <nav class="flex-grow space-y-2 mb-12">
            <a href="#" class="flex items-center px-4 py-3 rounded-lg text-sm font-medium sidebar-active">
                <i class="fas fa-th-large mr-3"></i>
                Dashboard
            </a>
            <!-- Mengganti hover:bg-bila-purple/50 menjadi hover:bg-card-dark/50 -->
<a href="#" class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-card-dark/50 transition duration-150">
    <i class="fas fa-layer-group mr-3"></i>
    Layanan Saya
</a>


            <a href="#" class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-card-dark/50 transition duration-150">
                <i class="fas fa-history mr-3"></i>
                Riwayat Pemesanan
            </a>
            <a href="#" class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-card-dark/50 transition duration-150">
                <i class="fas fa-history mr-3"></i>
                Riwayat Pemesanan
            </a>


        </nav>

        <!-- Spacer -->
        <div class="flex-grow"></div>

        <!-- Menu Bawah (Profile & Logout) -->
        <!-- Mengganti border-bila-purple/50 menjadi border-card-dark/50 -->
        <div class="space-y-2 border-t border-card-dark/50 pt-6 mt-6">

            <!-- PROFILE -->
            <!-- Mengganti hover:bg-bila-purple/50 menjadi hover:bg-card-dark/50 -->
            <a href="{{ route('profile.edit') }}" 
               class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-card-dark/50 transition duration-150">
                <i class="fas fa-user-circle mr-3"></i>
                Profile
            </a>

            <!-- LOGOUT -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <!-- Mengganti hover:bg-bila-purple/50 menjadi hover:bg-card-dark/50 -->
                <button class="w-full flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-card-dark/50 transition duration-150 text-left">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Logout
                </button>
            </form>

        </div>

        <!-- Support -->
        <div class="mt-8 text-center text-xs text-gray-400">
            <i class="fas fa-headset mr-1"></i> Help & Support
        </div>
    </div>

    <!-- 2. Main Content -->
    <div class="flex-1 ml-64 p-6 md:p-10">
        
        <!-- Header / Top Nav -->
        <header class="flex justify-between items-center mb-10 py-2">
            <div class="flex flex-col">
                <h1 class="text-3xl font-bold">Dashboard</h1>
                <p class="text-sm text-gray-400 mt-1">
                    Hallo {{ Auth::user()->name }}, Selamat Datang dalam dashboard HOSTVPS
                </p>
            </div>
            
            <div class="flex items-center space-x-4">
                <!-- Search Bar -->
                <div class="relative">
                    <!-- Mengganti bg-bila-sidebar & border-bila-purple -->
                    <input type="text" placeholder="Cari Disini" class="bg-card-dark text-white border border-accent-purple rounded-full py-2 pl-10 pr-4 w-64 focus:ring-accent-purple focus:border-accent-purple transition duration-300 shadow-sm-neon">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
                
                <!-- Buy Now Button -->
                <!-- Mengganti bg-bila-accent & hover:bg-bila-pink & shadow-neon -->
                <button class="bg-accent-orange hover:bg-accent-yellow text-white font-bold py-2 px-6 rounded-full transition duration-300 shadow-neon-orange uppercase tracking-wider">
                    BUY NOW
                </button>
                
                <!-- Avatar -->
                <!-- Mengganti border-bila-pink & ring-bila-accent -->
                <div class="relative w-10 h-10 rounded-full border-2 border-accent-orange overflow-hidden cursor-pointer">
                    <img src="https://placehold.co/40x40/4D1D7C/FFFFFF?text=JS" alt="User" class="object-cover w-full h-full">
                    <div class="absolute inset-0 ring-2 ring-accent-purple rounded-full opacity-50"></div>
                </div>
            </div>
        </header>

        <!-- Main Dashboard Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            
            <!-- STATS CARDS (Col 1-3) -->
            <div class="lg:col-span-3 grid grid-cols-3 gap-8">
                
                <!-- Card 1: Produk -->
                <div class="dashboard-card p-6 rounded-xl relative overflow-hidden">
                    <!-- Mengganti text-bila-accent -->
                    <i class="fas fa-box-open text-accent-purple text-opacity-30 absolute top-4 right-4 text-6xl"></i>
                    <!-- Mengganti bg-bila-accent/20 & text-bila-accent -->
                    <div class="bg-accent-purple/20 text-accent-purple p-3 rounded-full inline-block mb-4">
                        <i class="fas fa-cube text-2xl"></i>
                    </div>
                    <p class="text-3xl font-extrabold">7</p>
                    <p class="text-gray-400 mt-1">Produk</p>
                </div>

                <!-- Card 2: Domain -->
                <div class="dashboard-card p-6 rounded-xl relative overflow-hidden">
                    <!-- Mengganti text-bila-accent -->
                    <i class="fas fa-globe text-accent-purple text-opacity-30 absolute top-4 right-4 text-6xl"></i>
                    <!-- Mengganti bg-bila-accent/20 & text-bila-accent -->
                    <div class="bg-accent-purple/20 text-accent-purple p-3 rounded-full inline-block mb-4">
                        <i class="fas fa-ellipsis-h text-2xl"></i>
                    </div>
                    <p class="text-3xl font-extrabold">3</p>
                    <p class="text-gray-400 mt-1">Domain</p>
                </div>

                <!-- Card 3: Pesanan Saya -->
                <div class="dashboard-card p-6 rounded-xl relative overflow-hidden">
                    <!-- Mengganti text-bila-accent -->
                    <i class="fas fa-chart-line text-accent-purple text-opacity-30 absolute top-4 right-4 text-6xl"></i>
                    <!-- Mengganti bg-bila-accent/20 & text-bila-accent -->
                    <div class="bg-accent-purple/20 text-accent-purple p-3 rounded-full inline-block mb-4">
                        <i class="fas fa-chart-area text-2xl"></i>
                    </div>
                    <p class="text-3xl font-extrabold">4</p>
                    <p class="text-gray-400 mt-1">Pesanan Saya</p>
                </div>

            </div>

            <!-- Card 4: Status Pemesanan Terakhir (Col 4) -->
            <div class="lg:col-span-1 dashboard-card p-6 rounded-xl space-y-4">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-lg">Status Pemesanan Terakhir</h3>
                    <!-- Mengganti hover:text-bila-accent -->
                    <button class="text-gray-400 hover:text-accent-purple"><i class="fas fa-ellipsis-v"></i></button>
                </div>
                
                <!-- Status Item 1: Domain -->
                <!-- Mengganti bg-bila-purple/30 -->
                <div class="flex items-center space-x-3 p-3 bg-card-dark/50 rounded-lg">
                    <div class="w-8 h-8 rounded-full bg-blue-500/80 flex items-center justify-center text-sm">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium text-sm">Domain</p>
                        <p class="text-xs text-gray-400">nama domain.link</p>
                    </div>
                    <span class="text-xs text-green-400 font-semibold">Aktif</span>
                </div>

                <!-- Status Item 2: Hosting -->
                <!-- Mengganti bg-bila-purple/30 -->
                <div class="flex items-center space-x-3 p-3 bg-card-dark/50 rounded-lg">
                    <!-- Mengubah warna lingkaran menjadi kuning/oranye -->
                    <div class="w-8 h-8 rounded-full bg-accent-yellow/80 flex items-center justify-center text-sm">
                        <i class="fas fa-server"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium text-sm">Hosting</p>
                        <p class="text-xs text-gray-400">Paket Basic</p>
                    </div>
                    <span class="text-xs text-red-400 font-semibold">Expired</span>
                </div>

                <!-- Status Item 3: VPS -->
                <!-- Mengganti bg-bila-purple/30 -->
                <div class="flex items-center space-x-3 p-3 bg-card-dark/50 rounded-lg">
                    <!-- Mengubah warna lingkaran menjadi ungu -->
                    <div class="w-8 h-8 rounded-full bg-accent-purple/80 flex items-center justify-center text-sm">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium text-sm">VPS</p>
                        <p class="text-xs text-gray-400">2 CPU, 4 GB</p>
                    </div>
                    <span class="text-xs text-green-400 font-semibold">Aktif</span>
                </div>
            </div>

            <!-- PROMO & CHAT (Bottom Row) -->
            <div class="lg:col-span-3 flex flex-col space-y-8">
                
                <!-- Card 5: Cek Domain & Beli Domain -->
                <div class="dashboard-card p-6 rounded-xl">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-semibold text-xl">Cek Domain & Beli Domain Dengan Harga Murah</h3>
                        <!-- Mengganti hover:text-bila-accent -->
                        <button class="text-gray-400 hover:text-accent-purple"><i class="fas fa-ellipsis-v"></i></button>
                    </div>
                    <p class="text-gray-400 mb-6">Nikmati Promo yang tersedia</p>

                    <!-- Promo Grid -->
                    <div class="grid grid-cols-3 gap-4">
                        
                        <!-- Promo 1: VPS (Aksen Ungu & Orange) -->
                        <div class="relative p-4 rounded-lg bg-gradient-to-br from-card-dark to-main-dark border-2 border-accent-purple/50 overflow-hidden min-h-[180px]">
                            <div class="absolute inset-0 bg-cover bg-center opacity-10" style="background-image: url('https://placehold.co/300x180/000000/FFFFFF?text=VPS+SALE')"></div>
                            <!-- Mengganti text-bila-neon menjadi text-accent-purple -->
                            <span class="text-4xl font-extrabold text-accent-purple">DISKON 65%</span>
                            <p class="text-lg font-bold mt-2">FLASH SALE VPS</p>
                            <!-- Mengganti text-bila-accent menjadi text-accent-orange -->
                            <p class="text-xs text-accent-orange font-semibold uppercase mt-1">VPS SUPER MURAH!</p>
                            <!-- Mengganti bg-bila-pink/80 & hover:bg-bila-pink -->
                            <button class="text-xs font-semibold mt-4 text-white bg-accent-orange/80 py-1 px-3 rounded-full hover:bg-accent-orange transition">
                                BELI VPS MULAI 50RB/BULAN
                            </button>
                        </div>

                        <!-- Promo 2: Domain (Aksen Ungu & Putih) -->
                        <div class="relative p-4 rounded-lg bg-gradient-to-br from-card-dark/80 to-main-dark border-2 border-accent-purple/50 overflow-hidden min-h-[180px] flex flex-col justify-between">
                            <i class="fas fa-bolt text-accent-yellow text-opacity-50 absolute top-2 right-2 text-5xl transform -rotate-12"></i>
                            <p class="text-xs text-gray-300">SHOCKING SALE</p>
                            <span class="text-3xl font-extrabold text-white leading-tight">BELI DOMAIN DISKON UP 50%</span>
                            <!-- Mengganti text-bila-dark menjadi text-main-dark -->
                            <button class="text-sm font-semibold text-main-dark bg-white py-2 px-4 rounded-lg mt-4 hover:bg-gray-200 transition">
                                DAFTAR SEKARANG!
                            </button>
                        </div>

                        <!-- Promo 3: Hosting (Aksen Kuning) -->
                        <!-- Mengganti bg-bila-dark -->
                        <div class="relative p-4 rounded-lg bg-card-dark border-2 border-accent-yellow/50 overflow-hidden min-h-[180px] flex flex-col justify-between">
                            <!-- Mengganti text-bila-dark -->
                            <div class="absolute top-0 right-0 bg-accent-yellow text-main-dark px-3 py-1 text-xs font-bold rounded-bl-lg transform rotate-3 origin-top-right">
                                EXTRA 30%
                            </div>
                            <p class="text-xs text-gray-300">FLASH SALE</p>
                            <span class="text-2xl font-extrabold text-white leading-snug">BELI HOSTING MURAH!</span>
                            <div class="flex-grow"></div>
                            <!-- Mengganti bg-bila-accent & hover:bg-bila-pink -->
                            <button class="text-sm font-semibold text-white bg-accent-purple py-2 px-4 rounded-lg mt-4 hover:bg-accent-orange transition">
                                PELUANG LANGKA!
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6: Team Chat (Col 4) -->
            <div class="lg:col-span-1 dashboard-card p-6 rounded-xl space-y-4 flex flex-col">
                <div class="flex justify-between items-center">
                    <h3 class="font-semibold text-lg">Team Chat</h3>
                    <!-- Mengganti hover:text-bila-accent -->
                    <button class="text-gray-400 hover:text-accent-purple"><i class="fas fa-ellipsis-v"></i></button>
                </div>
                <p class="text-xs text-gray-400">Stay connected</p>

                <!-- Chat Thread -->
                <!-- Mengganti bg-bila-purple/30 -->
                <div class="flex-1 min-h-[100px] bg-card-dark/50 p-4 rounded-lg space-y-3 overflow-y-auto">
                    <!-- Message -->
                    <div class="flex space-x-3 items-start">
                        <!-- Mengubah warna lingkaran menjadi oranye -->
                        <div class="w-8 h-8 rounded-full bg-accent-orange/80 flex items-center justify-center text-xs font-bold">C</div>
                        <div class="flex-1">
                            <p class="text-xs text-gray-300">
                                The latest campaign boosted our sales!
                            </p>
                            <!-- Mengganti text-bila-accent -->
                            <p class="text-xs font-semibold mt-1 text-accent-purple">
                                Cahaya Deal
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Input Chat -->
                <div class="flex space-x-2 pt-2">
                    <!-- Mengganti bg-bila-purple/50 & focus:ring-bila-accent & focus:border-bila-accent -->
                    <input type="text" placeholder="Reply" class="flex-1 bg-card-dark/50 border border-card-dark/50 text-white rounded-lg py-2 px-4 text-sm focus:ring-accent-purple focus:border-accent-purple">
                    <!-- Mengganti bg-bila-accent & hover:bg-bila-pink -->
                    <button class="bg-accent-purple hover:bg-accent-orange text-white font-bold py-2 px-4 rounded-lg text-sm transition duration-300">
                        Kirim
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>