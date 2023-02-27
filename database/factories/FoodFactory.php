<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Food::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            // 'count' => $this->faker->count,
            'descriptions' => $this->faker->descriptions,
            'created_at' => now(),
        ];
    }
}
