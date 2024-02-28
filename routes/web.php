<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if (auth()->check()) {
        return redirect(route('orders'));
    } else {
        return redirect(route('login'));
    }
    
});

Route::middleware('auth')->group(function () {
    Route::get('/add-product', [ProductController::class, 'showForm'])->name('product');
    Route::post('/add-product', [ProductController::class, 'store'])->name('product');
    Route::get('/products', [ProductController::class, 'showList'])->name('products');
    Route::delete('/products/{id}/delete', [ProductController::class, 'delete'])->name('delete-product');

    Route::get('/add-order', [OrderController::class, 'showForm'])->name('order');
    Route::post('/add-order', [OrderController::class, 'store'])->name('order');
    Route::get('/orders', [OrderController::class, 'showList'])->name('orders');
    Route::delete('/orders/{id}/delete', [OrderController::class, 'delete'])->name('delete-order');
});

Auth::routes(['register'=> false, 'reset'=> false, 'verify'=> false]);