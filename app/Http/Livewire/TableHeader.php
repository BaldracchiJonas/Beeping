<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TableHeader extends Component
{
    public $headerColumns;

    public function mount($headerColumns)
    {
        $this->headerColumns = $headerColumns;
    }

    public function render()
    {
        return view('livewire.table-header');
    }
}
