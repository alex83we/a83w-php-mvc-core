<?php
/**
 * File: UserModel.php
 * User: aguth
 * Date: 07.März.2022
 * Time: 18:19
 */

namespace app\core;

use app\core\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}