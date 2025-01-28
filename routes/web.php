<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

Route::get('/pedidos/usuario2', [PedidoController::class, 'pedidosUsuario2']);//Recupera todos los pedidos asociados al usuario con ID 2.
Route::get('/pedidos/con-usuarios', [PedidoController::class, 'pedidosConUsuarios']);//Obtén los pedidos con información del usuario.
Route::get('/pedidos/rango', [PedidoController::class, 'pedidosEnRango']);//Obtén los pedidos cuyo total esté entre 100 y 250.
Route::get('/usuarios/r', [PedidoController::class, 'usuariosConR']);//Obtén los usuarios cuyos nombres empiezan con "R".
Route::get('/pedidos/usuario5/total', [PedidoController::class, 'totalPedidosUsuario5']);//Obtén el total de pedidos para el usuario con ID 5.
Route::get('/pedidos/ordenados', [PedidoController::class, 'pedidosOrdenados']);//Obtén los pedidos ordenados por total (descendente).
Route::get('/pedidos/suma', [PedidoController::class, 'sumaTotalPedidos']);//Obtén la suma total de los pedidos.
Route::get('/pedidos/barato', [PedidoController::class, 'pedidoMasBarato']);//Obtén el pedido más barato con información detallada del usuario.
Route::get('/pedidos/agrupados', [PedidoController::class, 'pedidosAgrupados']);//Obtén los pedidos agrupados por usuario.
