<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Foreign;
use App\Models\Payment;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'order_id' => Foreign::factory(),
            'payment_method' => fake()->word(),
            'amount' => fake()->randomFloat(2, 0, 999999.99),
            'status' => fake()->word(),
            'transaction_id' => fake()->regexify('[A-Za-z0-9]{nullable}'),
            'created_at' => fake()->dateTime(),
            'updated_at' => fake()->dateTime(),
        ];
    }
}
