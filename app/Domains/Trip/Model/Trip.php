<?php

namespace App\Domains\Trip\Model;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    public $fillable = ['first_name', 'last_name', 'email', 'cell_number'];
}
