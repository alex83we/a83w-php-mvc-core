<?php
/**
 * File: Response.php
 * User: aguth
 * Date: 06.März.2022
 * Time: 14:19
 */

namespace app\core;

class Response
{
    public function statusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect($url)
    {
        header("Location: $url");
    }
}