<?php

namespace App\Models\Food;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
        protected $table = "foods";
        
        protected $fillable = [
        'name',
        'price',
        'category',
        'description',
        'image',
    ];

    public $timestamps = true;
}
