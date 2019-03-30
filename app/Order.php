<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'delivery_date', 'status', 'description', 'shipping_address', 'payment_type', 'user_id',
    ];

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function order_details()
    {
        return $this->hasMany('App\Order_detail');
    }
}
