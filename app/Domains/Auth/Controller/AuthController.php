<?php

namespace App\Domains\Auth\Controller;

use App\Http\Controllers\Controller;
use App\Services\Responser\Responser;

class AuthController extends Controller
{
    public function login()
    {
        request()->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'type' => 'required|in:client,manager,biker'
        ]);


        return Responser::success();
    }
}
