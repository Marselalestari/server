<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @forelse($products as $product)
        <div class="p-5 bg-gray-800 rounded-lg shadow">
            <h2 class="text-xl font-bold text-white">{{ $product->name }}</h2>
            <p class="text-gray-400">CPU: {{ $product->cpu }} Core</p>
            <p class="text-gray-400">RAM: {{ $product->ram }} GB</p>
            <p class="text-gray-400">Storage: {{ $product->storage }} GB</p>
            <p class="text-gray-400">Bandwidth: {{ $product->bandwidth }}</p>
            <p class="text-yellow-400 font-bold mt-2">Rp {{ number_format($product->price) }}</p>
        </div>
    @empty
        <p class="text-gray-400">Belum ada produk tersedia.</p>
    @endforelse
</div>
