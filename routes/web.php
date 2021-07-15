<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
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



Route::get('/', [ClienteController::class, 'index'])->name('cliente.lista');
Route::get('/adicionar', [ClienteController::class, 'create'])->name('cliente.novo');
Route::post('/store', [ClienteController::class, 'store'])->name('cliente.salvar');
Route::get('/editar/{cliente}', [ClienteController::class, 'edit'])->name('cliente.editar');
Route::post('/update/{cliente}', [ClienteController::class, 'update'] )->name('cliente.update');
Route::get('/deletar/{cliente}', [ClienteController::class, 'destroy'] )->name('cliente.delete');
