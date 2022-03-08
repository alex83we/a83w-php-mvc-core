<?php
/**
 * File: ${FILE_NAME}
 * User: aguth
 * Date: 07.März.2022
 * Time: 19:36
 */

namespace a83w\phpmvc\exception;

class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}