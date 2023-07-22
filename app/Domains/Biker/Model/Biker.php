<?php

namespace App\Domains\Biker\Model;

use Illuminate\Database\Eloquent\Model;

class Biker extends Model
{
    public $fillable = ['first_name', 'last_name', 'email', 'cell_number'];
}
