<?php

namespace App\Domains\Biker\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Biker extends Authenticatable
{
    use HasApiTokens;

    public $fillable = ['first_name', 'last_name', 'email', 'cell_number'];
}
