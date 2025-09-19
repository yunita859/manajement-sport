<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil produk yang TIDAK rusak (hanya 'tersedia' & 'baik')
        $products = Product::where('status_barang', '!=', 'rusak')->get();

        // Kirim ke view pengguna.index
        return view('pengguna.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // Ambil data barang dari query string (?barang=...)
        $nama_barang = $request->get('barang');

        return view('pengguna.create', compact('nama_barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // nanti isi logika simpan peminjaman disini
    }
}

