<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CartItem;

class CartItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CartItem::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'cart_id' => fake()->randomNumber(),
            'product_id' => fake()->randomNumber(),
            'quantity' => fake()->numberBetween(-10000, 10000),
        ];
    }
}
