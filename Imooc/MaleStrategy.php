<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/4/27
 * Time: 8:10 AM
 */

namespace Imooc;


class MaleStrategy implements UserStrategy {
	public function showAd()
	{
		echo 'iphone6';
	}
	public function showCategory()
	{
		echo 'dian zi pro';
	}
}