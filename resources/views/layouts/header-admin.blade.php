<header class="flex justify-between items-center mb-10 py-2">
    <div class="flex flex-col">
        <h1 class="text-3xl font-bold text-gray">
            @yield('title', 'Dashboard Admin')
        </h1>
        <p class="text-sm text-gray-400 mt-1">
            @yield('subtitle', 'Halo Admin, selamat datang kembali 👋')
        </p>
    </div>

    <div class="relative">
        <input type="text" placeholder="Cari Disini" 
               class="bg-card-dark text-white border border-accent-purple rounded-full py-2 pl-10 pr-4 w-64 focus:ring-accent-purple focus:border-accent-purple transition duration-300 shadow-sm-neon">
        <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
    </div>
</header>
