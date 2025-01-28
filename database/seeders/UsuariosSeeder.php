<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            ['id' => 1, 'nombre' => 'Juan Perez', 'correo' => 'juan.perez@example.com', 'telefono' => '123456789', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'nombre' => 'Maria López', 'correo' => 'maria.lopez@example.com', 'telefono' => '987654321', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'nombre' => 'Carlos Mendoza', 'correo' => 'carlos.mendoza@example.com', 'telefono' => '456123789', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'nombre' => 'Laura Martínez', 'correo' => 'laura.martinez@example.com', 'telefono' => '321789654', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'nombre' => 'Luis Gomez', 'correo' => 'luis.gomez@example.com', 'telefono' => '741852963', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'nombre' => 'Ana Torres', 'correo' => 'ana.torres@example.com', 'telefono' => '963258741', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'nombre' => 'David Morales', 'correo' => 'david.morales@example.com', 'telefono' => '852147963', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'nombre' => 'Ramiro Carlos Ramírez', 'correo' => 'juan.carlos.ramirez@example.com', 'telefono' => '123456789', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'nombre' => 'Roberta María Ramírez', 'correo' => 'ana.maria.ramirez@example.com', 'telefono' => '987654321', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
