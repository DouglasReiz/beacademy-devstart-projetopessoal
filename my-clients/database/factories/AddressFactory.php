<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'address' => $this->faker->address(),
            'number' => $this->faker->buildingNumber(),
            'city' =>$this->faker->city(),
            'state' =>$this->faker->country(),
            'country' => $this->faker->country(),
            'postal_code' =>$this->faker->postcode()
        ];
    }
}
