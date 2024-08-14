<?php

namespace App\Helpers;

class Response
{
    public static function success($data = null, $message = null)
    {
        return [
            'success' => true,
            'message' => $message,
            'data' => $data
        ];
    }

    public static function error($message = null, $data = null)
    {
        return [
            'success' => false,
            'message' => $message,
            'data' => $data
        ];
    }
}