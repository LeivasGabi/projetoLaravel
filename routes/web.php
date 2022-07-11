<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;

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
    return view('form');
});
Route::post('/form', function () {
    return view('form');
});
Route::get('/relatorio', function () {
    return view('relatorio');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Relatorio', [App\Http\Controllers\ClienteController::class, 'index']); //lista todos
Route::post('/form', [App\Http\Controllers\ClienteController::class, 'store']); //cria

Route::get('/Relatorio', [App\Http\Controllers\PedidoController::class, 'index']); //lista todos

Route::post('/form', [App\Http\Controllers\PedidoController::class, 'store'])->name('form'); //cria 

