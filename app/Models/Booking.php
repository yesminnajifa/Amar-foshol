<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'product_name',
        'mobile',
        'pickup_date',
        'return_date',
        'division',
        'district',
        'house_no',
        'road_no'
    ];
}
