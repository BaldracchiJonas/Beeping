<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\OrderLine;

class OrderList extends Component
{
    public function render()
    {

        $orders = OrderLine::with('order','product')->get();

        return view('livewire.order-list', compact('orders'));
    }
}
