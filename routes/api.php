<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CagriMerkeziController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::resource('products', ProductController::class);

// Public routes
Route::post('/login', [AuthController::class, 'login']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/products/search/{name}', [ProductController::class, 'search']);

Route::get('/cagri-merkezleri', [CagriMerkeziController::class, 'index']);
Route::get('/cagri-merkezleri/{id}', [CagriMerkeziController::class, 'show']);
Route::get('/cagri-merkezleri/search/{name}', [CagriMerkeziController::class, 'search']);



// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);

    Route::post('/cagri-merkezleri', [CagriMerkeziController::class, 'store']);
    Route::put('/cagri-merkezleri/{id}', [CagriMerkeziController::class, 'update']);
    Route::delete('/cagri-merkezleri/{id}', [CagriMerkeziController::class, 'destroy']);
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
