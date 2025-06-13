<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Tampilkan semua produk dengan JSON
    public function index()
    {
        $products = Product::all();
        return response()->json($products, 200);
    }

    // Simpan produk baru via API JSON
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric'
        ]);

        $product = Product::create($request->all());
        return response()->json([
            'message' => 'Produk berhasil ditambahkan',
            'product' => $product
        ], 201);
    }

    // Tampilkan satu produk berdasarkan ID
    public function show(Product $product)
    {
        return response()->json($product, 200);
    }

    // Update produk via API JSON
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric'
        ]);

        $product->update($request->all());
        return response()->json([
            'message' => 'Produk berhasil diupdate',
            'product' => $product
        ], 200);
    }

    // Hapus produk via API JSON
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['message' => 'Produk berhasil dihapus'], 200);
    }
}
