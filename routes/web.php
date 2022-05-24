<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListarController;

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
Route::get('/picoteo', [ListarController::class,'ListarPicoteo'])->name('listarpicoteo');
Route::get('/carta', [ListarController::class,'ListarCarta'])->name('listarcarta');
Route::get('/novedades', [ListarController::class,'ListarNovedades'])->name('listarnovedades');
