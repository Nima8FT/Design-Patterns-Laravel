<?php

namespace Modules\Builder\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Builder\Models\Product::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->numberBetween(100, 1000),
            'is_available' => $this->faker->numberBetween(0, 1),
            'rating' => $this->faker->numberBetween(0, 5),
        ];
    }
}
