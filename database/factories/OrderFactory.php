<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\Order;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::factory(),
            'order_number' => fake()->word(),
            'status' => fake()->word(),
            'total' => fake()->randomFloat(2, 0, 99999999.99),
            'tax' => fake()->randomFloat(2, 0, 99999999.99),
            'shipping_cost' => fake()->randomFloat(2, 0, 99999999.99),
            'shipping_address' => fake()->text(),
            'shipping_city' => fake()->word(),
            'shipping_state' => fake()->word(),
            'shipping_zip' => fake()->word(),
            'shipping_country' => fake()->word(),
            'notes' => fake()->text(),
        ];
    }
}
