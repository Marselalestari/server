<header class="flex justify-between items-center mb-10 py-2">
    <div class="flex flex-col">
        <h1 class="text-3xl font-bold">Dashboard</h1>
        <p class="text-sm text-gray-400 mt-1">
            Hallo {{ Auth::user()->name }}, Selamat Datang dalam dashboard HOSTVPS
        </p>
    </div>

    <div class="flex items-center space-x-4">
        <div class="relative">
            <input type="text" placeholder="Cari Disini" class="bg-card-dark text-white border border-accent-purple rounded-full py-2 pl-10 pr-4 w-64 focus:ring-accent-purple focus:border-accent-purple transition duration-300 shadow-sm-neon">
            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
        </div>

        <button class="bg-accent-orange hover:bg-accent-yellow text-white font-bold py-2 px-6 rounded-full transition duration-300 shadow-neon-orange uppercase tracking-wider">
            BUY NOW
        </button>

        <div class="relative w-10 h-10 rounded-full border-2 border-accent-orange overflow-hidden cursor-pointer">
            <img src="https://placehold.co/40x40/4D1D7C/FFFFFF?text=JS" alt="User" class="object-cover w-full h-full">
            <div class="absolute inset-0 ring-2 ring-accent-purple rounded-full opacity-50"></div>
        </div>
    </div>
</header>