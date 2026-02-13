<?php

namespace App\Models\Food;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
       protected $table = "bookings";
        
        protected $fillable = [
        'user_id',
        'name',
        'email',
        'date',
        'num_people',
        'spe_request',
        'status',
    ];

    public $timestamps = true;
}
