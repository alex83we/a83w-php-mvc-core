<?php
/**
 * File: UserModel.php
 * User: aguth
 * Date: 07.März.2022
 * Time: 18:19
 */

namespace a83w\phpmvc;

use a83w\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}