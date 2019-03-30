<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'product_id', 'image', 
    ];

    public function products()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }
}
