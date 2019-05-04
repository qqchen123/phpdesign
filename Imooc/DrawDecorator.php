<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/5/4
 * Time: 2:04 PM
 */

namespace Imooc;

interface DrawDecorator
{
    public function beforedraw();
    public function afterdraw();
}
