<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

class DashboardController extends Controller
{
    public function userDashboard() {
        $totalProducts = Product::count();
        $totalOrders = Order::count();
        $totalUsers = User::where('admin', 0)->count();

        return view('dashboard', compact('totalProducts', 'totalOrders', 'totalUsers'));
    }

}
