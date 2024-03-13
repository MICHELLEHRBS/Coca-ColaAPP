<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VentaController;

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
    return view('welcome');
});

Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}/update', [CategoryController::class, 'update'])->name('categories.update');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}/update', [ProductController::class, 'update'])->name('products.update');
//Route::get('/products/{id}/view', [ProductController::class, 'show'])->name('products.view');
//Route::delete('/product/{id}/delete', [ProductController::class, 'destroy'])->name('products.destroy');


Route::get('/ventas', [VentaController::class, 'index'])->name('ventas.index');
//Route::get('/ventas/create', [VentaController::class, 'create'])->name('ventas.create');
//Route::post('/ventas/store', [VentaController::class, 'store'])->name('ventas.store');
//Route::get('/ventas/{id}/edit', [VentaController::class, 'edit'])->name('ventas.edit');
//Route::put('/ventass/{id}/update', [VentaController::class, 'update'])->name('ventas.update');
//Route::get('/ventas/{id}/view', [VentaController::class, 'show'])->name('ventas.view');
