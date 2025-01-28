<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    // 1. Recuperar todos los pedidos del usuario con ID 2
    public function pedidosUsuario2()
    {
        return Pedido::where('id_usuario', 2)->get();
    }

    // 2. Obtener pedidos con información del usuario
    public function pedidosConUsuarios()
    {
        return Pedido::join('usuarios', 'pedidos.id_usuario', '=', 'usuarios.id')
                     ->select('pedidos.*', 'usuarios.nombre', 'usuarios.correo')
                     ->get();
    }

    // 3. Pedidos con total entre 100 y 250
    public function pedidosEnRango()
    {
        return Pedido::whereBetween('total', [100, 250])->get();
    }

    // 4. Usuarios cuyos nombres empiezan con "R"
    public function usuariosConR()
    {
        return Usuario::where('nombre', 'like', 'R%')->get();
    }

    // 5. Total de pedidos para el usuario con ID 5
    public function totalPedidosUsuario5()
    {
        return Pedido::where('id_usuario', 5)->count();
    }

    // 6. Pedidos ordenados por total (descendente)
    public function pedidosOrdenados()
    {
        return Pedido::orderBy('total', 'desc')->get();
    }

    // 7. Suma total del campo "total"
    public function sumaTotalPedidos()
    {
        return Pedido::sum('total');
    }

    // 8. Pedido más económico con info de usuario
    public function pedidoMasBarato()
    {
        return Pedido::join('usuarios', 'pedidos.id_usuario', '=', 'usuarios.id')
                     ->select('pedidos.*', 'usuarios.nombre')
                     ->orderBy('total', 'asc')
                     ->first();
    }

    // 9. Pedidos agrupados por usuario
    public function pedidosAgrupados()
    {
        $pedidos = Pedido::select('id_usuario', 'producto', 'cantidad', 'total')
                         ->get();
    
        // Agrupar por usuario
        $pedidosAgrupados = $pedidos->groupBy('id_usuario');
    
        return $pedidosAgrupados;
    }
    
    
    
}
