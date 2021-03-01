<?php

namespace Database\Factories;

use App\Models\Mantenimiento;
use Illuminate\Database\Eloquent\Factories\Factory;

class MantenimientoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mantenimiento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->colorName,
            'fecha_programada' => $this->faker->date,
            'tipo' => $this->faker->numberBetween(0,4),
            'procedimiento' => $this->faker->randomLetter,
            'insumos' => $this->faker->randomLetter,
            'repuestos' => $this->faker->randomLetter,
            'activo' => $this->faker->numberBetween(0,1),
//            'role' => $faker->randomElement(['admin', 'author', 'suscriptor']),

        ];
    }
}
