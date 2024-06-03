<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Holodeck>
 */
class HolodeckFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "type" => $this->faker->name(),
            "serial_no" => $this->faker->text(50),
            "sw_version" => $this->faker->randomFloat(4, 1, 5000),
        ];
    }
}
