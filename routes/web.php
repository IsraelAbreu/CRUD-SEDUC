<?php

use App\Http\Controllers\BibliotecaController;
use Illuminate\Support\Facades\Route;

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
});

Route::get('/index', [BibliotecaController::class, 'index'])->name('index');
Route::get('/index/create', [BibliotecaController::class, 'create'])->name('create.biblioteca');
Route::post('/index/create', [BibliotecaController::class, 'store'])->name('store.biblioteca');
Route::delete('/index/{id}', [BibliotecaController::class, 'destroy'])->name('destroy.biblioteca');
Route::get('/index/editar/{id}', [BibliotecaController::class, 'editar'])->name('editar.biblioteca');
Route::put('/index/editar/{id}', [BibliotecaController::class, 'update'])->name('update.biblioteca');