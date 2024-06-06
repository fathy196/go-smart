<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->imageUrl(400, 400,'people', true,'Faker'),
            'name' => $this->faker->name,
            'phoneNo' => $this->faker->phoneNumber,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'year_of_birth' => $this->faker->year,
            'contact_link' => $this->faker->url,
            'car_type' => $this->faker->word,
            'language' => $this->faker->languageCode,
            'description' => $this->faker->paragraph,
        ];
    }
}
