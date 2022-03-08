<?php
/**
 * File: Form.php
 * User: aguth
 * Date: 06.März.2022
 * Time: 22:02
 */

namespace a83w\phpmvc\form;

use a83w\phpmvc\Model;

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