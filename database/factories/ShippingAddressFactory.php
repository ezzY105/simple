<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ShippingAddress;

class ShippingAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ShippingAddress::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->randomNumber(),
            'address_line' => fake()->word(),
            'city' => fake()->city(),
            'state' => fake()->word(),
            'postal_code' => fake()->postcode(),
            'country' => fake()->country(),
        ];
    }
}
