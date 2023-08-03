<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\OrderLine;

class OrdersTotalCost extends Command
{
    protected $signature = 'orders:total-cost';

    protected $description = 'Calculate the total cost of all orders';

    public function handle()
    {

        $totalCost = OrderLine::with('product')
        ->get()
        ->sum(function ($orderLine) {
            return $orderLine->qty * $orderLine->product->cost;
        });

        echo "Total cost of all orders: " . $totalCost . "\n";
    }
}

