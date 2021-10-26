<?php

namespace Database\Factories;

use App\Models\History_Posyandu;
use Illuminate\Database\Eloquent\Factories\Factory;

class History_PosyanduFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = History_Posyandu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tgl_posyandu' => $this->faker->date(),
            'berat_badan_balita' => $this->faker->sentence(2),
            'tinggi_badan_balita' => $this->faker->sentence(3),
        ];
    }
}
