<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/5/4
 * Time: 11:09 AM
 */

namespace Imooc;

use Imooc\Data\MySQLi;

class User
{
    public $id;
    public $username;
    public $password;
    protected $db;
    public function __construct($id)
    {
        $this->db = new MySQLi();
        $this->db->connect('127.0.0.1', 'root', 'root', 'qiushibaike');
        $res  = $this->db->query("select * from user where `id` = {$id}");
        $data = $res->fetch_assoc();

        $this->id       = $data['id'];
        $this->username = $data['username'];
        $this->password = $data['password'];
    }
    public function __destruct()
    {
        $this->db->query(
            "update user set 
								username='{$this->username}',
								password='{$this->password}'
					where id={$this->id}
		"
        );
    }
}
