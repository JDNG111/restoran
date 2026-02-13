<?php

namespace App\Models\Food;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = "cart";
        
        protected $fillable = [
        'user_id',
        'food_id',
        'name',
        'image',
        'price',
    ];

    public $timestamps = true;
}
