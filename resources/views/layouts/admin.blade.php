<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - HOSTVPS</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
    /* =====================
       GLOBAL BACKGROUND
    ====================== */
    body {
        background-color: #f1f1ffff;
        background-image: none;
        font-family: 'Inter', sans-serif;
    }

    /* =====================
       SIDEBAR
    ====================== */
    .sidebar {
        background-color: #1A2138 !important;
        color: white !important;
    }

    .sidebar a,
    .sidebar i,
    .sidebar span,
    .sidebar p {
        color: white !important;
    }

    /* Menu aktif */
    .sidebar-active {
        background-color: #26304D !important;
        border-right: 4px solid #8E67F6;
        color: white !important;
    }

    /* =====================
       KONTEN UTAMA
    ====================== */

    /* Semua teks di konten default hitam */
    main,
    main * {
        color: #1A1A1A;
    }

    /* KECUALI elemen yang memang harus berwarna (status dll) */
    .text-green-400 { color: #1faa63 !important; }
    .text-yellow-400 { color: #d19a00 !important; }
    .text-accent-purple { color: #7b4bff !important; }
    .text-gray-400 { color: #6f6f6f !important; }

    /* =====================
       DASHBOARD CARD
    ====================== */
    .dashboard-card {
        background: #ffffff;
        border: 1px solid #e5e5e9;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        border-radius: 14px;
    }

    /* Icon belakang (besar, opacity rendah) */
    .text-opacity-20 {
        opacity: 0.15 !important;
    }

    /* Lingkaran icon depan */
    .bg-accent-purple\/20 {
        background-color: rgba(142, 103, 246, 0.15) !important;
    }

    /* =====================
       STATUS CARD (GRAY BOX)
    ====================== */
    .bg-card-dark\/50 {
        background-color: rgba(245,245,250,0.9) !important;
        border: 1px solid #e0e0e5 !important;
        color: #1A1A1A !important;
    }

    /* =====================
       SEARCH BAR DI HEADER
    ====================== */
    input[type="text"] {
        background-color: #f1f1f3 !important;
        color: #000 !important;
        border: 1px solid #c9c9d1 !important;
    }

    input[type="text"]::placeholder {
        color: #5a5a5a !important;
    }
</style>
</head>

<body class="text-white min-h-screen flex">

    <!-- SIDEBAR -->
    <aside class="w-64 flex flex-col min-h-screen py-6 px-4 fixed top-0 left-0 z-10 shadow-lg sidebar">

        <!-- HEADER LOGO -->
        <div class="flex items-center space-x-2 mb-10 px-2">
            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none">
                <path
                    d="M7.75 3L16.25 21M18.5 6L21 8.5L18.5 11M3 6L5.5 8.5L3 11"
                    stroke="#8E67F6"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <span class="text-2xl font-bold">ADMIN VPS</span>
        </div>

        <!-- MENU -->
        <nav class="flex-grow space-y-2 mb-12">

            <a href="{{ route('admin.dashboard') }}"
                class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-[#26304D]
                {{ request()->routeIs('admin.dashboard') ? 'sidebar-active' : '' }}">
                <i class="fas fa-th-large mr-3"></i> Dashboard
            </a>

            <a href="{{ route('admin.users.index') }}"
                class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-[#26304D]
                {{ request()->routeIs('admin.users.*') ? 'sidebar-active' : '' }}">
                <i class="fas fa-users mr-3"></i> Kelola Pengguna
            </a>

            <a href="#"
                class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-[#26304D']">
                <i class="fas fa-server mr-3"></i> Kelola VPS
            </a>

            <a href="#"
                class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-[#26304D']">
                <i class="fas fa-clipboard-list mr-3"></i> Order VPS
            </a>

            <a href="#"
                class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-[#26304D']">
                <i class="fas fa-money-check-alt mr-3"></i> Transaksi Masuk
            </a>

            <a href="#"
                class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-[#26304D']">
                <i class="fas fa-chart-bar mr-3"></i> Laporan Penjualan
            </a>
        </nav>

        <!-- FOOTER MENU -->
        <div class="space-y-2 border-t border-[#2A314A] pt-6 mt-6">

            <a href="{{ route('profile.edit') }}"
                class="flex items-center px-4 py-3 rounded-lg hover:bg-[#26304D]
                {{ request()->routeIs('profile.edit') ? 'sidebar-active' : '' }}">
                <i class="fas fa-user-circle mr-3"></i> Profile
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="w-full flex items-center px-4 py-3 rounded-lg hover:bg-[#26304D] text-left">
                    <i class="fas fa-sign-out-alt mr-3"></i> Logout
                </button>
            </form>
        </div>

        <p class="mt-8 text-center text-xs text-gray-400">
            <i class="fas fa-shield-alt mr-1"></i> Admin Panel
        </p>

    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 ml-64 p-6 md:p-10">

        <!-- GLOBAL HEADER -->
        <header class="flex justify-between items-center mb-10 py-2">
    <div>
        <h1 class="text-3xl font-bold text-black">
            @yield('title', 'Dashboard Admin')
        </h1>
        <p class="text-sm text-gray-400 mt-1">
            @yield('subtitle', 'Halo Admin, selamat datang kembali 👋')
        </p>
    </div>

    <div class="relative">
        <input type="text" placeholder="Cari Disini"
            class="bg-[#26304D] text-white border border-[#8E67F6] rounded-full
            py-2 pl-10 pr-4 w-64 shadow-[0_0_10px_rgba(142,103,246,0.7)]">
        <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
    </div>
</header>


        @yield('content')

    </main>

</body>

</html>
