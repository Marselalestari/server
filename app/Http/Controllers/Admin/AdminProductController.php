<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;   // Tambahkan ini!

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'cpu'         => 'required|numeric|min:1',
            'ram'         => 'required|numeric|min:1',
            'storage'     => 'required|numeric|min:1',
            'bandwidth'   => 'required|string',
            'price'       => 'required|numeric|min:1',
            'description' => 'nullable|string',
        ]);

        Product::create([
            'name'        => $request->name,
            'cpu'         => $request->cpu,
            'ram'         => $request->ram,
            'storage'     => $request->storage,
            'bandwidth'   => $request->bandwidth,
            'price'       => $request->price,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.products.index')
            ->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name'        => 'required|string|max:255',
            'cpu'         => 'required|numeric|min:1',
            'ram'         => 'required|numeric|min:1',
            'storage'     => 'required|numeric|min:1',
            'bandwidth'   => 'required|string',
            'price'       => 'required|numeric|min:1',
            'description' => 'nullable|string',
        ]);

        $product->update([
            'name'        => $request->name,
            'cpu'         => $request->cpu,
            'ram'         => $request->ram,
            'storage'     => $request->storage,
            'bandwidth'   => $request->bandwidth,
            'price'       => $request->price,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.products.index')
            ->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return back()->with('success', 'Produk berhasil dihapus!');
    }
}
