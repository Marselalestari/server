<div class="w-64 bg-card-dark text-white fixed h-screen py-6 px-4 flex flex-col">
    <!-- Logo -->
    <div class="flex items-center space-x-2 mb-10 px-2">
        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none">
            <path d="M7.75 3L16.25 21M18.5 6L21 8.5L18.5 11M3 6L5.5 8.5L3 11" 
                  stroke="#8E67F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span class="text-2xl font-bold text-white">HOSTVPS ADMIN</span>
    </div>

    <!-- Menu -->
    <nav class="flex-grow space-y-2">

        <a href="{{ route('admin.dashboard') }}"
           class="flex items-center px-4 py-3 rounded-lg text-sm font-medium {{ request()->routeIs('admin.dashboard') ? 'sidebar-active' : '' }}">
            <i class="fas fa-home mr-3"></i> Dashboard
        </a>

        <a href="{{ route('admin.users.index') }}"
           class="flex items-center px-4 py-3 rounded-lg text-sm font-medium {{ request()->routeIs('admin.users.*') ? 'sidebar-active' : '' }}">
            <i class="fas fa-users mr-3"></i> Manajemen Pengguna
        </a>

        
        

        <a href="{{ route('admin.orders.index') }}"
           class="flex items-center px-4 py-3 rounded-lg text-sm font-medium {{ request()->routeIs('admin.orders.*') ? 'sidebar-active' : '' }}">
            <i class="fas fa-shopping-cart mr-3"></i> Order Masuk
        </a>

        <a href="{{ route('admin.products.index') }}"
           class="flex items-center px-4 py-3 rounded-lg text-sm font-medium {{ request()->routeIs('admin.products.*') ? 'sidebar-active' : '' }}">
            <i class="fas fa-box-open mr-3"></i> Kelola Produk
        </a>

        <a href="{{ route('admin.billing.index') }}"
           class="flex items-center px-4 py-3 rounded-lg text-sm font-medium {{ request()->routeIs('admin.billing.*') ? 'sidebar-active' : '' }}">
            <i class="fas fa-file-invoice-dollar mr-3"></i> Transaksi
        </a>

        <a href="{{ route('admin.tickets.index') }}"
           class="flex items-center px-4 py-3 rounded-lg text-sm font-medium {{ request()->routeIs('admin.tickets.*') ? 'sidebar-active' : '' }}">
            <i class="fas fa-ticket-alt mr-3"></i> Customer Support
        </a>

    </nav>

    <div class="flex-grow"></div>

    <!-- Logout -->
<div class="border-t border-card-dark/50 pt-6 mt-6">
    <form method="POST" action="{{ route('logout') }}" 
          onsubmit="return confirm('Yakin ingin logout?')">
        @csrf
        <button class="w-full flex items-center px-4 py-3 rounded-lg text-sm font-medium text-red-400 hover:text-red-300 hover:bg-red-500/10 transition">
            <i class="fas fa-sign-out-alt mr-3"></i> Logout
        </button>
    </form>
</div>



</div>
