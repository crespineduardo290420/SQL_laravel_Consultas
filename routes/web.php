<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return view('welcome');
});

//Rutas para verificar las sentencias sql que se deben ejecutar

//Recupera todos los pedidos del usuario con ID = 2
Route::get('/pedidos/usuario2', [PedidoController::class, 'pedidosUsuario2']);

//Muestra los pedidos junto con el nombre y correo del usuario
Route::get('/pedidos/usuarios', [PedidoController::class, 'pedidosConUsuarios']);

//Pedidos cuyo total esté entre $100 y $250
Route::get('/pedidos/rango', [PedidoController::class, 'pedidosEnRango']);

//Muestra usuarios cuyos nombres empiezan con "R"
Route::get('/usuarios/con-r', [PedidoController::class, 'usuariosConR']);

//Muestra cuántos pedidos tiene el usuario con ID = 5
Route::get('/pedidos/usuario5/total', [PedidoController::class, 'totalPedidosUsuario5']);

//Lista todos los pedidos ordenados por el total en orden descendente
Route::get('/pedidos/ordenados', [PedidoController::class, 'pedidosOrdenados']);

//Muestra la suma total del campo "total" en la tabla de pedidos
Route::get('/pedidos/suma-total', [PedidoController::class, 'sumaTotalPedidos']);

//Muestra el pedido más barato con el nombre del usuario
Route::get('/pedidos/mas-barato', [PedidoController::class, 'pedidoMasBarato']);

//Agrupa pedidos por usuario, mostrando producto, cantidad y total
Route::get('/pedidos/por-usuario', [PedidoController::class, 'resumenPedidosPorUsuario']);
