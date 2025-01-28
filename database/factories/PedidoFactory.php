<?php

namespace Database\Factories;

use App\Models\Pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    protected $model = Pedido::class;

    public function definition()
    {
        return [
            'producto' => $this->faker->word(),
            'nombre' => $this->faker->name(),
            'total' => $this->faker->randomFloat(2, 10, 1000),
            'id_usuario' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
