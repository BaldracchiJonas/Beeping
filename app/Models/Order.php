<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['order_ref', 'customer_name'];

    public function orderLines()
    {
        return $this->hasMany(OrderLine::class);
    }
}
