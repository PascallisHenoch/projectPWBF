<?php

namespace Database\Factories;

use App\Models\Balita;
use Illuminate\Database\Eloquent\Factories\Factory;

class BalitaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Balita::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_balita' => $this->faker->name(),
            'nik_ortu' => $this->faker->sentence(16),
            'nama_ortu' => $this->faker->name(),
            'tgllahir_balita' => $this->faker->date(),
            'jk_balita' => $this->faker->randomElement(['M','F']),
            'status' => $this->faker->sentence(10)
        ];
    }
}
