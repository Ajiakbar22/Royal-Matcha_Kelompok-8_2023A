<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function confirm($id) {
        $order = Order::findOrFail($id);
        $order->status = 'Sudah Bayar';
        $order->save();

        return redirect()->route('admin.orders')->with('success', 'Pesanan berhasil dikonfirmasi!');
    }

    public function create(Request $request)
    {
        $productName = $request->query('produk');
        $product = Product::where('name', $productName)->first();

        if (!$product) {
            return back()->with('error', 'Produk tidak ditemukan.');
        }

        return view('pesan', compact('product'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'produk' => 'required|string',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'jumlah' => 'required|integer|min:1',
        ]);

        $validated['user_id'] = auth()->id();

        $product = Product::where('name', $validated['produk'])->first();

    if (!$product) {
        return back()->with('error', 'Produk tidak ditemukan.');
    }

        Order::create([
            'produk' => $validated['produk'],
            'nama' => $validated['nama'],
            'alamat' => $validated['alamat'],
            'total' => round($product->price * $validated['jumlah']),
            'jumlah' => $validated['jumlah'],
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('order.success')->with('success', 'Pesanan berhasil disimpan.');
    }


    public function index()
    {
        $orders = Order::latest()->get();
        return view('orders.index', compact('orders'));
    }

    public function riwayat()
    {
        // Ambil data pesanan milik user yang sedang login, atau semua (kalau belum pakai login bisa order by)
        $orders = Order::where('user_id', auth()->id())->latest()->get();

        return view('riwayat.index', compact('orders'));
    }

}
