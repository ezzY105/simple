<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ProductReview;

class ProductReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductReview::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'product_id' => fake()->randomNumber(),
            'user_id' => fake()->randomNumber(),
            'rating' => fake()->numberBetween(-10000, 10000),
            'review' => fake()->text(),
        ];
    }
}
