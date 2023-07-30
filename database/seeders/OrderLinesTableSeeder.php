<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\OrderLineFactory;

class OrderLinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderLineFactory::new()->count(20)->create();
    }
}
