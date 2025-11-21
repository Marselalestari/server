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
        body {
            background-color: #1A2138;
            background-image:
                linear-gradient(to right, rgba(142, 103, 246, 0.1) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(142, 103, 246, 0.1) 1px, transparent 1px);
            background-size: 40px 40px;
            font-family: 'Inter', sans-serif;
        }

        .sidebar-active {
            background-color: #26304D !important;
            border-right: 4px solid #8E67F6;
            color: white !important;
        }
    </style>
</head>

<body class="text-white min-h-screen flex">

    <!-- SIDEBAR -->
    <aside class="w-64 flex flex-col min-h-screen py-6 px-4 fixed top-0 left-0 z-10 shadow-lg bg-[#1B2339]">

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
                class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-[#26304D]">
                <i class="fas fa-server mr-3"></i> Kelola VPS
            </a>

            <a href="#"
                class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-[#26304D]">
                <i class="fas fa-clipboard-list mr-3"></i> Order VPS
            </a>

            <a href="#"
                class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-[#26304D]">
                <i class="fas fa-money-check-alt mr-3"></i> Transaksi Masuk
            </a>

            <a href="#"
                class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-[#26304D]">
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
        @yield('content')
    </main>

</body>

</html>
