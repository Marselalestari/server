<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class UserProductController extends Controller
{
    // Halaman daftar semua produk (read-only)
    public function index()
    {
        $products = Product::all();
        return view('user.products.index', compact('products'));
    }

    // Halaman detail produk
    public function show(Product $product)
    {
        return view('user.products.show', compact('product'));
    }

    // Proses pembelian
    public function buy(Product $product)
    {
        // Sementara bisa simpan di session / nanti di tabel orders
        // Contoh session:
        // session()->push('orders', $product->id);

        return redirect()->route('user.products.index')
            ->with('success', 'Pembelian berhasil diproses!');
    }
}
