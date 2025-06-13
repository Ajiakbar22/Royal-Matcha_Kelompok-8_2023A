<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\OrderController;

Route::get('/login', function() {
    return 'Login route via GET';
});
Route::post('/login', [AuthController::class, 'login']);
Route::middleware(['jwt.verify'])->group(function () {
    Route::get('/orders', [OrderController::class, 'index']);
    Route::post('/orders', [OrderController::class, 'store']);
    Route::put('/orders/{id}', [OrderController::class, 'update']);
    Route::delete('/orders/{id}', [OrderController::class, 'destroy']);
});

Route::middleware('auth.basic')->get('/basic-protected', function () {
    return response()->json(['message' => 'Authenticated via Basic Auth']);
});
Route::middleware('check.apikey')->get('/apikey-protected', function () {
    return response()->json(['message' => 'Authenticated via API Key']);
});


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('/profile', [AuthController::class, 'getUser']);
    Route::post('/logout', [AuthController::class, 'logout']);

});

Route::apiResource('products', ProductController::class);


Route::middleware(['auth.jwt'])->group(function () {
    Route::get('/user-profile', function () {
        return auth()->user();
    });

    // route lain yang butuh login JWT...
});


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
