<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Tymon\JWTAuth\Facades\JWTAuth;

class OrderController extends Controller
{
    // Tampilkan semua order
    public function index()
    {
        $orders = Order::all();
        return response()->json([
            'success' => true,
            'data' => $orders,
        ], 200);
    }

    // Tambah order baru
    public function store(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();

        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $request->validate([
            'produk' => 'required|string',
            'nama'   => 'required|string',
            'alamat' => 'required|string',
            'jumlah' => 'required|integer|min:1',
        ]);

        $order = Order::create([
            'produk'  => $request->produk,
            'nama'    => $request->nama,
            'alamat'  => $request->alamat,
            'jumlah'  => $request->jumlah,
            'user_id' => $user->id,
            'total'   => 0, // bisa dihitung sesuai harga produk x jumlah nanti
        ]);

        return response()->json(['success' => true, 'order' => $order], 201);
    }

    // Update order
    public function update(Request $request, $id)
    {
        $user = JWTAuth::parseToken()->authenticate();

        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $order = Order::find($id);
        if (!$order) {
            return response()->json(['error' => 'Order tidak ditemukan'], 404);
        }

        // Validasi
        $request->validate([
            'produk' => 'sometimes|string',
            'nama'   => 'sometimes|string',
            'alamat' => 'sometimes|string',
            'jumlah' => 'sometimes|integer|min:1',
        ]);

        // Update data
        $order->update($request->only(['produk', 'nama', 'alamat', 'jumlah']));

        return response()->json([
            'success' => true,
            'message' => 'Order berhasil diupdate',
            'order'   => $order
        ]);
    }

    // Hapus order
    public function destroy($id)
    {
        $user = JWTAuth::parseToken()->authenticate();

        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $order = Order::find($id);
        if (!$order) {
            return response()->json(['error' => 'Order tidak ditemukan'], 404);
        }

        $order->delete();

        return response()->json([
            'success' => true,
            'message' => 'Order berhasil dihapus'
        ]);
    }
}
