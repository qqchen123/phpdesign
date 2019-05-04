<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/4/26
 * Time: 5:39 AM
 */

namespace Imooc;

class Register
{
    protected static $objects;
    
    public static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    public static function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }

    public static function get($alias)
    {
        return self::$objects[$alias];
    }
}
