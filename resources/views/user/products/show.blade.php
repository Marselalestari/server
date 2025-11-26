<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
    @forelse($products as $product)

        <div class="bg-gray-800 border border-gray-700 rounded-xl shadow-lg 
                    hover:shadow-2xl hover:border-purple-500 transition duration-300
                    flex flex-col justify-between h-full">

            {{-- KONTEN UTAMA --}}
            <div class="p-6 space-y-5">

                <h2 class="text-2xl font-extrabold text-white border-b border-gray-700 pb-3 h-16 overflow-hidden">
                    <span class="text-yellow-500 mr-2">🚀</span> {{ $product->name }}
                </h2>

                <div class="space-y-3">
                    <p class="text-gray-400 flex justify-between">
                        <span class="font-medium text-gray-300">CPU:</span>
                        <span class="text-white">{{ $product->cpu }} Core</span>
                    </p>
                    <p class="text-gray-400 flex justify-between">
                        <span class="font-medium text-gray-300">RAM:</span>
                        <span class="text-white">{{ $product->ram }} GB</span>
                    </p>
                    <p class="text-gray-400 flex justify-between">
                        <span class="font-medium text-gray-300">Storage:</span>
                        <span class="text-white">{{ $product->storage }} GB</span>
                    </p>
                    <p class="text-gray-400 flex justify-between">
                        <span class="font-medium text-gray-300">Bandwidth:</span>
                        <span class="text-white">{{ $product->bandwidth }}</span>
                    </p>
                </div>
            </div>

            {{-- FOOTER --}}
            <div class="p-4 bg-gray-700/30 border-t border-gray-700">
                <div class="mb-4">
                    <p class="text-sm text-gray-400 font-medium">Mulai dari:</p>
                    <p class="text-4xl font-black text-white-400">
                        Rp {{ number_format($product->price) }}
                        <span class="text-lg font-normal text-gray-500">/bln</span>
                    </p>
                </div>

                <a href="/produk/{{ $product->id }}/beli" 
                   class="block w-full text-center bg-purple-600 hover:bg-purple-700 text-gray-900 font-bold 
                          py-3 rounded-lg transition duration-200 tracking-wider text-sm uppercase">
                    Pilih & Beli
                </a>
            </div>

        </div>

    @empty
        <div class="col-span-full p-8 bg-gray-800 rounded-xl text-center border-2 border-dashed border-gray-700">
            <p class="text-gray-400 text-lg">😔 Belum ada produk tersedia saat ini.</p>
        </div>
    @endforelse
</div>
