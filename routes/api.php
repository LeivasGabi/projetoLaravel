<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;

//inicio rotas cliente
Route::get('cliente', [ClienteController::class, 'index']); //lista todos
Route::get('cliente/{id}', [ClienteController::class, 'show']); //lista um especifico
Route::post('cliente', [ClienteoController::class, 'store']); //cria 
Route::put('cliente/{id}', [ClienteController::class, 'update']); //atualiza
Route::delete('cliente/{id}', [ClienteController::class,'destroy']); //deleta

// rotas pedido
Route::get('pedido', [PedidoController::class, 'index']); //lista todos
Route::get('pedido/{id}', [PedidoController::class, 'show']); //lista um especifico
Route::post('pedido', [PedidoController::class, 'store']); //cria 
Route::put('pedido/{id}', [PedidoController::class, 'update']); //atualiza
Route::delete('pedido/{id}', [PedidoController::class,'destroy']); //deleta