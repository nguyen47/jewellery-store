<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'delivery_date', 'status', 'description', 'shipping_address', 'payment_type', 'user_id',
    ];
}
