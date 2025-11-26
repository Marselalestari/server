<h1 class="text-2xl font-bold mb-4">Daftar Produk</h1>

@if (session('success'))
    <p class="text-green-500">{{ session('success') }}</p>
@endif

{{-- Form tambah produk --}}
<form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf
    <input type="text" name="name" placeholder="Nama Produk" class="w-full p-2 border rounded">
    <input type="number" name="price" placeholder="Harga" class="w-full p-2 border rounded">
    <textarea name="description" placeholder="Deskripsi" class="w-full p-2 border rounded"></textarea>
    <input type="file" name="image" class="w-full p-2 border rounded">
    <button class="bg-blue-600 text-white px-4 py-2 rounded">Simpan Produk</button>
</form>

<hr class="my-6">

{{-- Tampilkan produk --}}
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
@foreach ($products as $p)
    <div class="p-4 border rounded shadow">
        @if ($p->image)
            <img src="{{ asset('storage/' . $p->image) }}" class="w-full h-40 object-cover rounded mb-2">
        @endif
        <h2 class="font-bold text-lg">{{ $p->name }}</h2>
        <p class="text-gray-600">{{ $p->description }}</p>
        <p class="font-bold text-blue-600 mt-2">Rp {{ number_format($p->price) }}</p>
    </div>
@endforeach
</div>
