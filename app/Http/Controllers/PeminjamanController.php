<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        return redirect()->route('peminjaman.index');
    }

  
    public function store(Request $request)
{
    $request->validate([
    'nama_peminjam' => 'required|string|max:255',
    'nama_barang'   => 'required|string|max:255',
    'jumlah_barang' => 'required|integer',
    'tanggal_pinjam'  => 'required|date',
    'tanggal_kembali' => 'required|date|after_or_equal:tanggal_pinjam',
]);


    // simpan data ke DB
    Peminjaman::create($request->all());

    // langsung redirect ke daftar peminjam
    return redirect()->route('peminjaman.index');
}

}

