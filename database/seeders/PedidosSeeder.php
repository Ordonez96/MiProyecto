<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidosSeeder extends Seeder
{
    public function run()
    {
        DB::table('pedidos')->insert([
            ['id' => 1, 'producto' => 'Laptop HP', 'cantidad' => 2, 'total' => 1500.00, 'id_usuario' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'producto' => 'Cable hdmi', 'cantidad' => 2, 'total' => 15.00, 'id_usuario' => 1, 'created_at' => now(), 'updated_at' => now()],

            ['id' => 3, 'producto' => 'iPhone 13', 'cantidad' => 1, 'total' => 1000.00, 'id_usuario' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'producto' => 'Cargador iPhone', 'cantidad' => 1, 'total' => 65.00, 'id_usuario' => 2, 'created_at' => now(), 'updated_at' => now()],

            ['id' => 5, 'producto' => 'Monitor Samsung', 'cantidad' => 1, 'total' => 300.00, 'id_usuario' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'producto' => 'Monitor Dell', 'cantidad' => 1, 'total' => 300.00, 'id_usuario' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'producto' => 'Monitor Acer', 'cantidad' => 1, 'total' => 300.00, 'id_usuario' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'producto' => 'Monitor LG 4K', 'cantidad' => 1, 'total' => 400.00, 'id_usuario' => 3, 'created_at' => now(), 'updated_at' => now()],

            ['id' => 9, 'producto' => 'Mouse Logitech', 'cantidad' => 3, 'total' => 75.00, 'id_usuario' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'producto' => 'Mouse Microsoft', 'cantidad' => 2, 'total' => 50.00, 'id_usuario' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' =>11, 'producto' => 'Mouse Apple', 'cantidad' => 1, 'total' => 150.00, 'id_usuario' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'producto' => 'Mouse Dell', 'cantidad' => 1, 'total' => 25.00, 'id_usuario' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['id' => 13, 'producto' => 'Teclado Mecánico', 'cantidad' => 2, 'total' => 200.00, 'id_usuario' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 14, 'producto' => 'Teclado Dell', 'cantidad' => 1, 'total' => 100.00, 'id_usuario' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'producto' => 'Teclado Apple', 'cantidad' => 1, 'total' => 250.00, 'id_usuario' => 5, 'created_at' => now(), 'updated_at' => now()],
            
            ['id' => 16, 'producto' => 'Tablet Samsung', 'cantidad' => 1, 'total' => 500.00, 'id_usuario' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 17, 'producto' => 'Laptop Lenovo', 'cantidad' => 1, 'total' => 900.00, 'id_usuario' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 18, 'producto' => 'Laptop Alienwere', 'cantidad' => 1, 'total' => 2500.00, 'id_usuario' => 6, 'created_at' => now(), 'updated_at' => now()],

            ['id' => 19, 'producto' => 'Auriculares Sony', 'cantidad' => 2, 'total' => 250.00, 'id_usuario' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 20, 'producto' => 'Auriculares LG', 'cantidad' => 5, 'total' => 550.00, 'id_usuario' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 21, 'producto' => 'Auriculares PRIMUS', 'cantidad' => 2, 'total' => 155.00, 'id_usuario' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 22, 'producto' => 'Auriculares Samsung', 'cantidad' => 2, 'total' => 350.00, 'id_usuario' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 23, 'producto' => 'Auriculares Skullcandy', 'cantidad' => 2, 'total' => 350.00, 'id_usuario' => 7, 'created_at' => now(), 'updated_at' => now()],


        ]);
    }
}
