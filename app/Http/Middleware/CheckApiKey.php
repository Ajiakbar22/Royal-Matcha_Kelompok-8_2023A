<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckApiKey
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Ambil API Key dari header
        $apiKey = $request->header('X-API-KEY');

        // Cek apakah API Key valid (kita cocokkan dengan yang di .env)
        if ($apiKey !== env('MY_API_KEY')) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized - Invalid API Key',
            ], 401);
        }

        // Lanjut ke proses berikutnya kalau API Key valid
        return $next($request);
    }
}
