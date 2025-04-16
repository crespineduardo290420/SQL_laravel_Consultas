<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
     //  Recupera todos los pedidos del usuario con ID 2
     public function pedidosUsuario2()
     {
         return DB::table('orders')->where('user_id', 2)->get();
     }
 
     //  Pedidos con nombre y correo del usuario
     public function pedidosConUsuarios()
     {
         return DB::table('orders')
             ->join('users', 'orders.user_id', '=', 'users.id')
             ->select('orders.*', 'users.name', 'users.email')
             ->get();
     }
 
     //  Pedidos entre $100 y $250
     public function pedidosEnRango()
     {
         return DB::table('orders')
             ->whereBetween('total', [100, 250])
             ->get();
     }
 
     //  Usuarios cuyo nombre comienza con "R"
     public function usuariosConR()
     {
         return DB::table('users')
             ->where('name', 'LIKE', 'R%')
             ->get();
     }
 
     //  Total de pedidos del usuario con ID 5
     public function totalPedidosUsuario5()
     {
         return DB::table('orders')
             ->where('user_id', 5)
             ->count();
     }
 
     //  Pedidos con usuarios ordenados por total desc
     public function pedidosOrdenados()
     {
         return DB::table('orders')
             ->join('users', 'orders.user_id', '=', 'users.id')
             ->select('orders.*', 'users.name')
             ->orderByDesc('orders.total')
             ->get();
     }
 
     //  Suma total del campo "total"
     public function sumaTotalPedidos()
     {
         return DB::table('orders')->sum('total');
     }
 
     //  Pedido más económico con nombre del usuario
     public function pedidoMasBarato()
     {
         return DB::table('orders')
             ->join('users', 'orders.user_id', '=', 'users.id')
             ->select('orders.*', 'users.name')
             ->orderBy('orders.total', 'asc')
             ->first();
     }
 
     //  Producto, cantidad y total agrupados por usuario
     public function resumenPedidosPorUsuario()
     {
         return DB::table('orders')
             ->join('users', 'orders.user_id', '=', 'users.id')
             ->select('users.name', DB::raw('SUM(quantity) as cantidad_total'), DB::raw('SUM(total) as total'))
             ->groupBy('users.name')
             ->get();
     }
}
