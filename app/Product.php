<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Sluggable;

    protected $fillable = [
        'name', 'price', 'discount', 'stock', 'category_id', 'product_code', 'size', 'image', 'description', 'slug', 'status',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    // One Product belongs to one category
    public function categories()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
