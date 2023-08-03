<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\OrderLine;

class OrderList extends Component
{
    public $orders;

    public function mount()
    {
        $this->orders = OrderLine::with('order','product')->get();
    }

    public function render()
    {
        return view('livewire.order-list');
    }
}
