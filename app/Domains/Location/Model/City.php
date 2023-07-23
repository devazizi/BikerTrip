<?php

namespace App\Domains\Location\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'name_en', 'coordinates', 'currently_available', 'trip_fee_percentage'];

    protected $casts = [
        'coordinates' => 'array'
    ];
}
