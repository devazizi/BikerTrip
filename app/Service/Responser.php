<?php

namespace App\Services\Responser;

class Responser
{
    public static function success(array|string $data, string $message)
    {
        return [
            'status' => 'success',
            'message' => is_null($message) ? 'operation successful' : $message,
        ];
    }

    public static function error(array|string $data, string $message)
    {
        return [
            'status' => 'error',
            'message' => is_null($message) ? 'operation successful' : $message,
        ];
    }
}
