<?php
/**
 * File: BaseMiddleware.php
 * User: aguth
 * Date: 07.März.2022
 * Time: 19:08
 */

namespace a83w\phpmvc\middlewares;

abstract class BaseMiddleware
{
    abstract public function execute();
}