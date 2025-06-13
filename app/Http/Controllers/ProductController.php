<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric'
        ]);

        Product::create($request->all());
        return redirect('/products')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit(Product $product) {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric'
        ]);

        $product->update($request->all());
        return redirect('/products')->with('success', 'Produk berhasil diupdate');
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect('/products')->with('success', 'Produk berhasil dihapus');
    }
}
