<?php

namespace Database\Factories;

use App\Models\OrderLine;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderLineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderLine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        // Get random existing order_id and product_id
        $orderId = Order::inRandomOrder()->value('id');
        $productId = Product::inRandomOrder()->value('id');

        return [
            'qty' => fake()->numberBetween(1, 10),
            'order_id' => $orderId,
            'product_id' => $productId
        ];
    }
}

