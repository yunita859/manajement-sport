<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil semua data produk
        $products = Product::all();

        // Kirim ke view dashboard
        return view('dashboard', compact('products'));
    }
}
