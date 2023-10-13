<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Producto;



class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
        return [
            'nombre_producto' => $this->faker->sentence(3),
            'descripcion' => $this->faker->paragraph,
            'precio' => $this->faker->randomFloat(2, 10, 1000),
            'stock' => $this->faker->numberBetween(1, 100),
            'estado' => true,
            'fecha_activo' => $this->faker->date,
            'fecha_limite' => $this->faker->date,
            'imagen' => 'images/' . $this->faker->image('public/images', 400, 300, null, false),

        ];
    }
}
