<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BukuController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->group(function() {
    Route::get('buku', [BukuController::class, 'index']);
    Route::get('buku/{id}', [BukuController::class, 'show']);
    Route::post('buku', [BukuController::class, 'store']);
    Route::put('buku/{id}', [BukuController::class, 'update']);
    Route::delete('buku/{id}', [BukuController::class, 'destroy']);

    // Route::resource('buku', BukuController::class);
});
