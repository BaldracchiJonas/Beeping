<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\OrderFactory;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderFactory::new()->count(20)->create();
    }
}
