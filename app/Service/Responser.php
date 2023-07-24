<?php

namespace App\Services\Responser;

class Responser
{
    public static function success($data = null, ?string $message = null)
    {
        return [
            'status' => 'success',
            'message' => is_null($message) ? 'operation successful' : $message,
            'data' => $data
        ];
    }

    public static function error($data = null, ?string $message = null)
    {
        return [
            'status' => 'error',
            'message' => is_null($message) ? 'operation successful' : $message,
            'data' => $data
        ];
    }
}
