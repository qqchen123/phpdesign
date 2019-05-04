<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/4/24
 * Time: 8:27 AM
 */

namespace Imooc;

class Database
{
    private $db;
    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (self::$db) {
            return self::$db;
        } else {
            self::$db = new self();
            return self::$db;
        }
    }

    public function where($where)
    {
        return $this;
    }
    public function order($order)
    {
        return $this;
    }
    public function limit($limit)
    {
        return $this;
    }
}
