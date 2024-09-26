<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->text,
        'apellido' => $this->faker->text,
        'ci_numero' => $this->faker->text,
        'direccion' => $this->faker->text,
        'telefono' => $this->faker->text,
        'ciudad' => $this->faker->text,
        'pais' => $this->faker->text,
        'mapa' => $this->faker->text,
        'lat' => $this->faker->text,
        'lang' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
