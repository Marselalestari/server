<div class="lg:col-span-3 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

    <!-- Produk -->
    <a href="{{ route('dashboard') }}" 
       class="block transition transform hover:scale-[1.02]">
        <div class="dashboard-card p-6 rounded-xl relative overflow-hidden bg-card-dark border border-card-dark/40 shadow-lg hover:shadow-xl transition-all">
            <i class="fas fa-box-open text-accent-purple/10 absolute top-4 right-4 text-7xl"></i>

            <div class="bg-accent-purple/20 text-accent-purple p-3 rounded-full inline-block mb-4 relative z-10">
                <i class="fas fa-cube text-2xl"></i>
            </div>

            <p class="text-3xl font-extrabold relative z-10">7</p>
            <p class="text-gray-400 mt-1 relative z-10">Produk</p>
        </div>
    </a>

    <!-- Request VPS -->
    <a href="{{ route('request') }}" 
       class="block transition transform hover:scale-[1.02]">
        <div class="dashboard-card p-6 rounded-xl relative overflow-hidden bg-card-dark border border-card-dark/40 shadow-lg hover:shadow-xl transition-all">

            <i class="fas fa-globe text-accent-purple/10 absolute top-4 right-4 text-7xl"></i>

            <div class="bg-accent-purple/20 text-accent-purple p-3 rounded-full inline-block mb-4 relative z-10">
                <i class="fas fa-paper-plane text-2xl"></i>
            </div>

            <p class="text-3xl font-extrabold relative z-10">3</p>
            <p class="text-gray-400 mt-1 relative z-10">Request</p>
        </div>
    </a>

    <!-- VPS -->
    <a href="{{ route('vps') }}" 
       class="block transition transform hover:scale-[1.02]">
        <div class="dashboard-card p-6 rounded-xl relative overflow-hidden bg-card-dark border border-card-dark/40 shadow-lg hover:shadow-xl transition-all">

            <i class="fas fa-server text-accent-purple/10 absolute top-4 right-4 text-7xl"></i>

            <div class="bg-accent-purple/20 text-accent-purple p-3 rounded-full inline-block mb-4 relative z-10">
                <i class="fas fa-hdd text-2xl"></i>
            </div>

            <p class="text-3xl font-extrabold relative z-10">4</p>
            <p class="text-gray-400 mt-1 relative z-10">VPS</p>
        </div>
    </a>

    <!-- Riwayat -->
    <a href="{{ route('riwayatpemesanan') }}" 
       class="block transition transform hover:scale-[1.02]">
        <div class="dashboard-card p-6 rounded-xl relative overflow-hidden bg-card-dark border border-card-dark/40 shadow-lg hover:shadow-xl transition-all">

            <i class="fas fa-history text-accent-purple/10 absolute top-4 right-4 text-7xl"></i>

            <div class="bg-accent-purple/20 text-accent-purple p-3 rounded-full inline-block mb-4 relative z-10">
                <i class="fas fa-list text-2xl"></i>
            </div>

            <p class="text-3xl font-extrabold relative z-10">4</p>
            <p class="text-gray-400 mt-1 relative z-10">Riwayat Pemesanan</p>
        </div>
    </a>

    <!-- Tagihan -->
    <a href="{{ route('bilingtagihan') }}" 
       class="block transition transform hover:scale-[1.02]">
        <div class="dashboard-card p-6 rounded-xl relative overflow-hidden bg-card-dark border border-card-dark/40 shadow-lg hover:shadow-xl transition-all">

            <i class="fas fa-file-invoice text-accent-purple/10 absolute top-4 right-4 text-7xl"></i>

            <div class="bg-accent-purple/20 text-accent-purple p-3 rounded-full inline-block mb-4 relative z-10">
                <i class="fas fa-file-invoice-dollar text-2xl"></i>
            </div>

            <p class="text-3xl font-extrabold relative z-10">4</p>
            <p class="text-gray-400 mt-1 relative z-10">Tagihan</p>
        </div>
    </a>

</div>
