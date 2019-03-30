<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $fillable = [
        'discount', 'order_id', 'product_id', 'price', 'quatity', 'subtotal',
    ];

    public function orders()
    {
        return $this->belongsTo('App\Order', 'order_id');
    }

    public function products()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }
}
