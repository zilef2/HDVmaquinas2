<?php

namespace Database\Factories;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Equipo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->monthName,
            'serial' => $this->faker->numberBetween(123,3321),
            'aquien_vendio' => $this->faker->companyEmail,
            'foto_plaqueta' => "foto/".$this->faker->randomLetter,
            'al_dia' => $this->faker->numberBetween(0,1),
//            'fecha_ultimo_mant' => $this->faker->dateTimeBetween('-1 year','now'),

//            'role' => $faker->randomElement(['admin', 'author', 'suscriptor']),
//            'remember_token' => Str::random(10),
//            'title' => $faker->sentence(2)

        ];
    }
}
