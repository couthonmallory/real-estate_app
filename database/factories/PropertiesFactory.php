<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Properties>
 */
class PropertiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' => asset('storage/roomPicture.jpg'),
            'price' => fake()->numberBetween($min = 1000, $max = 9000), // 8567(),
            'name' => fake()->sentence($nbWords = 3, $variableNbWords = true),
            'description' => fake()->paragraph($nbSentences = 3, $variableNbSentences = true),
        ];
    }
}
