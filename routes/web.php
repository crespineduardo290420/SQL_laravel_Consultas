<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return view('welcome');
});

//Rutas para verificar las sentencias sql que se deben ejecutar

Route::get('/pedidos/usuario2', [PedidoController::class, 'pedidosUsuario2']);
Route::get('/pedidos/usuarios', [PedidoController::class, 'pedidosConUsuarios']);
Route::get('/pedidos/rango', [PedidoController::class, 'pedidosEnRango']);
Route::get('/usuarios/con-r', [PedidoController::class, 'usuariosConR']);
Route::get('/pedidos/usuario5/total', [PedidoController::class, 'totalPedidosUsuario5']);
Route::get('/pedidos/ordenados', [PedidoController::class, 'pedidosOrdenados']);
Route::get('/pedidos/suma-total', [PedidoController::class, 'sumaTotalPedidos']);
Route::get('/pedidos/mas-barato', [PedidoController::class, 'pedidoMasBarato']);
Route::get('/pedidos/por-usuario', [PedidoController::class, 'resumenPedidosPorUsuario']);
