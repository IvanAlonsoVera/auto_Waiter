<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListarController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/bebidas', [ListarController::class,'ListarBebidas'])->name('listarBebida');
Route::get('/picoteo', [ListarController::class,'ListarPicoteo'])->name('listarPicoteo');
Route::get('/carta', [ListarController::class,'ListarCarta'])->name('listarCarta');
Route::get('/novedades', [ListarController::class,'ListarNovedades'])->name('listarNovedades');

//rutas de crear producto
Route::post('crearProducto',[PlatoController::class, 'guardar'])->middleware(['auth'])->name('crearProducto');


//rutas del blade formularioModificarProductos se le pasa el id siempre??
Route::get('modificarProducto/{id}',[PlatoController::class, 'mod'])->middleware(['auth'])->name('modProducto');
Route::post('modificarProducto/{id}',[PlatoController::class, 'modBD'])->middleware(['auth'])->name('modBDProducto');


Route::get('/', [ProductController::class, 'index']);  
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');