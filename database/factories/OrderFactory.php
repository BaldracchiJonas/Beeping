<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

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
     *
     * @return array
     */
    public function definition()
    {
        $orderRefs = ['Fragile', 'Not fragile', 'Free', 'Free shipping']; // Define possible order_ref values

        return [
            'order_ref' => fake()->randomElement($orderRefs),
            'customer_name' => fake()->name
        ];
    }
}

