<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->text(),
            'city' => fake()->city(),
            'state' => fake()->word(),
            'zip' => fake()->postcode(),
            'country' => fake()->country(),
            'status' => fake()->boolean(),
            'email_verified_at' => fake()->dateTime(),
            'password' => fake()->password(),
            'remember_token' => fake()->uuid(),
        ];
    }
}
