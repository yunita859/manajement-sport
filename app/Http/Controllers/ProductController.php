<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        {
        $products = Product::all(); // ambil semua data produk
        return view('dashboard', compact('products'));
    }
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nama_barang'   => 'required|string|max:255',
        'status_barang' => 'required|string',
        'gambar_barang' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'jumlah_barang' => 'required|integer|min:1',
    ]);

    $path = null;

    if ($request->hasFile('gambar_barang')) {
        // Simpan ke storage/app/public/products
        $path = $request->file('gambar_barang')->store('products', 'public');
        // hasil di DB: "products/namafile.png"
    }

    Product::create([
        'nama_barang'   => $request->nama_barang,
        'status_barang' => $request->status_barang,
        'gambar_barang' => $path, // simpan path ke DB
        'jumlah_barang' => $request->jumlah_barang,
    ]);

    return redirect()->route('products.index')
                     ->with('success', 'Produk berhasil ditambahkan!');
}



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $product = Product::findOrFail($id);
    return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, string $id)
   {
    $request->validate([
        'nama_barang'   => 'required|string|max:255',
        'status_barang' => 'required|string',
        'jumlah_barang' => 'required|integer|min:1',
        'gambar_barang' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $product = Product::findOrFail($id);

    // Kalau ada gambar baru
    if ($request->hasFile('gambar_barang')) {
        // Hapus gambar lama kalau ada
        if ($product->gambar_barang && \Storage::disk('public')->exists($product->gambar_barang)) {
            \Storage::disk('public')->delete($product->gambar_barang);
        }

        // Simpan gambar baru
        $gambarPath = $request->file('gambar_barang')->store('products', 'public');
        $product->gambar_barang = $gambarPath;
    }

    // Update field lain
    $product->nama_barang   = $request->nama_barang;
    $product->status_barang = $request->status_barang;
    $product->jumlah_barang = $request->jumlah_barang;

    $product->save();

    return redirect()->route('products.index')->with('success', 'Produk berhasil diupdate!');
   }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
    }
}
