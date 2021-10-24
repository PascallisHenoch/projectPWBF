<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class InformasiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(mt_rand(2,8)),
            'slug'=>$this->faker->slug(),
            'excerpt'=>$this->faker->paragraph(),
            'body'=>$this->faker->paragraph(mt_rand(5,10))

            
            
        ];
    }
}
