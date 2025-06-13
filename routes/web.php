<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AdminProductController;



Route::get('/api-documentation', function () {
    return view('api-documentation');
})->name('api-documentation');


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/products', [AdminProductController::class, 'index'])->name('admin.products.index');
});

Route::get('/riwayat-pesanan', [OrderController::class, 'riwayat'])->name('riwayat.pesanan');


Route::get('/admin/users', [AdminController::class, 'show'])->name('admin.show');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'doLogin']);
Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'doRegister']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');



// Product
Route::resource('/products', ProductController::class)->middleware('auth');

// Default redirect
Route::get('/', function () {
    return redirect('/login');
});

Route::get('/home', function () {
    return redirect('/dashboard');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/admin.products', function () {
    return view('admin.products');

});
Route::get('/pesan', function (\Illuminate\Http\Request $request) {
    $produk = $request->input('produk');
    return view('pesan', compact('produk'));
});

Route::get('/order-success', function () {
    return view('orders.success');
})->name('order.success');


Route::get('/pesan', [OrderController::class, 'create']);
Route::post('/pesan', [OrderController::class, 'store'])->name('orders.store');
Route::get('/admin/orders', [OrderController::class, 'index'])->name('orders.index')->middleware('auth');
Route::get('/admin/{admin}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/{admin}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/{admin}', [AdminController::class, 'destroy'])->name('admin.destroy');


// Login admin
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

// Group routes yang perlu login admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});




Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');


// Route ke halaman form tambah admin
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');

// Route simpan admin baru
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('products', AdminProductController::class)->names('admin.products');
});



Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/profile', function () {
    return view('admin.profile');
})->middleware('auth')->name('profile');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// Route user dashboard
Route::get('/dashboard', [DashboardController::class, 'userDashboard'])->middleware('auth')->name('dashboard');

// Route admin dashboard
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('/admin', AdminController::class);
});
