<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\OrderLine;

class OrderList extends Component
{
    public $orders;
    public $ordersArray; //Array of the ordes so in the view we can loop through it and make it dynamic
    public $headerColumns = ['Order Reference','Customer Name','Total Cost'];

    public function mount()
    {
        $this->orders = OrderLine::with(['order' => function ($query) {
            $query->select('id', 'customer_name', 'order_ref');
        }])
        ->with(['product' => function ($query) {
            $query->select('id', 'cost');
        }])
        ->get(['id', 'qty','order_id','product_id']);

        $this->ordersArray = $this->orders->map(function ($orderLine) {
            return [
                $orderLine->order->order_ref,
                $orderLine->order->customer_name,
                '$ '.number_format($orderLine->qty * $orderLine->product->cost, 2),
            ];
        });
    }

    public function render()
    {
        return view('livewire.order-list');
    }
}
