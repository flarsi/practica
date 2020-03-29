<?php
/**
 * Created by PhpStorm.
 * User: Tolik
 * Date: 28.03.2020
 * Time: 14:18
 */

namespace App\Traits;


trait Response
{
    public static function response( $success = true, $message = '', $code = '', $data = null)
    {
        return json_encode([
            'success' => $success,
            'error' => [
                'message' => $message,
                'code' => $code
                ],
            'data' => $data,
        ]);
    }
}