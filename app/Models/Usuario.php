<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    
    protected $table = 'usuarios';
    protected $fillable = ['nombre', 'correo', 'telefono'];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'id_usuario');
    }
}
