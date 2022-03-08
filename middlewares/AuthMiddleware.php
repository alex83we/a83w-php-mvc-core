<?php
/**
 * File: AuthMiddleware.php
 * User: aguth
 * Date: 07.März.2022
 * Time: 19:07
 */

namespace a83w\phpmvc\middlewares;

use a83w\phpmvc\Application;
use a83w\phpmvc\exception\ForbiddenException;

class AuthMiddleware extends BaseMiddleware
{
    protected array $actions = [];

    public function __construct($actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}