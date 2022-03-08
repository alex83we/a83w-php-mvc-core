<?php
/**
 * File: NotFoundException.php
 * User: aguth
 * Date: 08.März.2022
 * Time: 09:32
 */

namespace app\core\exception;

class NotFoundException extends \Exception
{
    protected $message = "Page not found";
    protected $code = 404;
}