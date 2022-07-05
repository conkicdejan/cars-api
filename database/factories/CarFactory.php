<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->company(),
            'model' => $this->faker->word(),
            'year' => $this->faker->numberBetween(1950, 2022),
            'max_speed' =>  $this->faker->numberBetween(0, 350),
            'is_automatic' => $this->faker->boolean(),
            'engine' => $this->faker->numberBetween(750, 6000),
            'number_of_doors' => $this->faker->numberBetween(1, 5),
        ];
    }
}
