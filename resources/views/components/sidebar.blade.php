<aside class="w-64 bg-gray-900 text-white h-screen fixed top-0 left-0 shadow-lg">
    <div class="p-6 font-bold text-xl tracking-wide border-b border-gray-700">
        VPS Panel
    </div>

    <nav class="mt-4">
        <ul class="space-y-1">

            <!-- Dashboard -->
            <li>
                <a href="{{ route('dashboard') }}"
                   class="flex items-center px-5 py-3 hover:bg-gray-800 transition rounded-lg">
                    <i class="fas fa-chart-line w-6"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Request VPS -->
            <li>
                <a href="{{ route('vps.request') }}"
                   class="flex items-center px-5 py-3 hover:bg-gray-800 transition rounded-lg">
                    <i class="fas fa-server w-6"></i>
                    <span>Request VPS</span>
                </a>
            </li>

            <!-- Riwayat Request -->
            <li>
                <a href="{{ route('vps.riwayat') }}"
                   class="flex items-center px-5 py-3 hover:bg-gray-800 transition rounded-lg">
                    <i class="fas fa-list-alt w-6"></i>
                    <span>Riwayat Request</span>
                </a>
            </li>

            <!-- VPS Saya -->
            <li>
                <a href="{{ route('vps.saya') }}"
                   class="flex items-center px-5 py-3 hover:bg-gray-800 transition rounded-lg">
                    <i class="fas fa-hdd w-6"></i>
                    <span>VPS Saya</span>
                </a>
            </li>

            <!-- Tagihan -->
            <li>
                <a href="{{ route('tagihan.index') }}"
                   class="flex items-center px-5 py-3 hover:bg-gray-800 transition rounded-lg">
                    <i class="fas fa-file-invoice-dollar w-6"></i>
                    <span>Tagihan</span>
                </a>
            </li>

        </ul>
    </nav>
</aside>
