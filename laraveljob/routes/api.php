<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use PHPUnit\Framework\MockObject\Builder\ParametersMatch;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route::get('/posts', [ListingController::class, ''])

/* Route::get('/posts', function () {
    return response()->json([
        'posts' => [
            'title' => 'hello',
            'text' => 'there'
        ]
    ]);
}); */

Route::get('/partner/{company}', [ServiceController::class, 'show']);

Route::get('/product/{product}', [ServiceController::class, 'showProducts']);

Route::get('/services/{summary}', [ServiceController::class, 'index']);

Route::middleware(['cors'])->group(function () {
    Route::post('/service/store', [ServiceController::class, 'store']);
});

Route::middleware(['cors'])->group(function () {
    Route::post('/partners/store', [PartnerController::class, 'store']);
});

Route::get('/partners', [PartnerController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
