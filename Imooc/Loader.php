<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/4/24
 * Time: 8:02 AM
 */
namespace Imooc;

class Loader
{
    public static function autoload($class)
    {
        require BASEDIR.'/'.str_replace('\\', '/', $class).'.php';
    }
}
