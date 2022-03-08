<?php
/**
 * File: Form.php
 * User: aguth
 * Date: 06.März.2022
 * Time: 22:02
 */

namespace a83w\php-mvc-core\form;

use a83w\php-mvc-core\Model;

class Form
{
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        return '</form>';
    }

    public function field(Model $model, $attribute)
    {
        return new Field($model, $attribute);
    }
}