<div class="w-64 bg-card-dark text-white fixed h-screen py-6 px-4 flex flex-col">
    <!-- Logo -->
    <div class="flex items-center space-x-2 mb-10 px-2">
        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none">
            <path d="M7.75 3L16.25 21M18.5 6L21 8.5L18.5 11M3 6L5.5 8.5L3 11" stroke="#8E67F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span class="text-2xl font-bold text-white">HOSTVPS</span>
    </div>

    <!-- Menu -->
    <nav class="flex-grow space-y-2">
        <a href="{{ route('dashboard') }}" 
           class="flex items-center px-4 py-3 rounded-lg text-sm font-medium {{ request()->routeIs('dashboard') ? 'sidebar-active' : '' }}">
            <i class="fas fa-th-large mr-3"></i> Dashboard
        </a>
        <a href="{{ route('request') }}" 
           class="flex items-center px-4 py-3 rounded-lg text-sm font-medium {{ request()->routeIs('request') ? 'sidebar-active' : '' }}">
            <i class="fas fa-layer-group mr-3"></i> Request VPS
        </a>
        <a href="{{ route('vps') }}" 
           class="flex items-center px-4 py-3 rounded-lg text-sm font-medium {{ request()->routeIs('vps') ? 'sidebar-active' : '' }}">
            <i class="fas fa-history mr-3"></i> VPS Saya
        </a>
        <a href="{{ route('riwayatpemesanan') }}" 
           class="flex items-center px-4 py-3 rounded-lg text-sm font-medium {{ request()->routeIs('riwayatpemesanan') ? 'sidebar-active' : '' }}">
            <i class="fas fa-history mr-3"></i> Riwayat Pemesanan
        </a>
        <a href="{{ route('bilingtagihan') }}" 
           class="flex items-center px-4 py-3 rounded-lg text-sm font-medium {{ request()->routeIs('bilingtagihan') ? 'sidebar-active' : '' }}">
            <i class="fas fa-history mr-3"></i> Billing / Tagihan
        </a>
    </nav>

    <!-- Spacer -->
    <div class="flex-grow"></div>

    <!-- Profile & Logout Breeze -->
    <div class="space-y-2 border-t border-card-dark/50 pt-6 mt-6">
        @auth
            <a href="{{ route('profile.edit') }}" 
               class="flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-card-dark/50">
                <i class="fas fa-user-circle mr-3"></i> {{ Auth::user()->name }}
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="w-full flex items-center px-4 py-3 rounded-lg text-sm font-medium hover:bg-card-dark/50 text-left">
                    <i class="fas fa-sign-out-alt mr-3"></i> Logout
                </button>
            </form>
        @endauth
    </div>
</div>