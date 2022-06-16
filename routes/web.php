<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListarController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsuarioController;

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
//para el index
Route::get('/', [ListarController::class,'ListarNovedades'])->name('listarNovedades');

//registro
Route::post('/registro', [UsuarioController::class,'registroUsuario'])->name('registroUsuario');


//rutas de pedido
Route::get('/tramitar', [ListarController::class,'Tramitar'])->name('tramitar');
Route::get('/almacenarPedido/{request}', [ProductController::class,'almacenarPedido'])->name('almacenarPedido');

//rutas de carrito
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

//rutas de CRUD producto
Route::get('/borrar/{id}',[ProductController::class,'borrarProducto'])->middleware(['auth'])->name('borrar');


Route::get('/modificar/{id}',[ProductController::class,'modId'])->middleware(['auth'])->name('modificarProducto');
Route::post('/modificar/{id}',[ProductController::class,'modificarProducto'])->middleware(['auth'])->name('modificarProducto');

Route::get('/formCrear',[ProductController::class,'formCrearProducto'])->middleware(['auth'])->name('formCrear');
Route::post('/crearProducto',[ProductController::class,'crearProducto'])->middleware(['auth'])->name('crear');
