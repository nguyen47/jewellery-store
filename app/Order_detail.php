<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $fillable = [
        'discount', 'order_id', 'product_id', 'price', 'quatity', 'subtotal',
    ];
}
