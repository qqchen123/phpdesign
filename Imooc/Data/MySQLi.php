<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/5/4
 * Time: 11:25 AM
 */
namespace Imooc\Data;

class MySQLi
{
    private $link;
    public function connect($host, $user, $password, $database)
    {
        $this->link = mysqli_connect($host, $user, $password, $database);
        if (!$this->link) {
            printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
            exit;
        }
    }

    public function query($query)
    {
        return mysqli_query($this->link, $query);
    }
}
