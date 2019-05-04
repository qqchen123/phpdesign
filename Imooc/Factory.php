<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/4/25
 * Time: 9:17 PM
 */

namespace Imooc;

class Factory
{
    /**
     * @return Database
     */
    public static function createDatabase()
    {
        //		$db = new Database();
        $db = Database::getInstance();
        return $db;
    }

    /**
     * @param $id
     * @return User
     */
    public static function getUser($id)
    {
        $key  = 'user_'.$id;
        $user = Register::get($key);
        if (!$user) {
            $user = new User($id);
            Register::set($key, $user);
        }
        return $user;
    }
}
