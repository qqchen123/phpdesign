<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/4/27
 * Time: 8:08 AM
 */

namespace Imooc;


class FemalStrategy implements UserStrategy {
	function showAd()
	{
		echo "2014 nvzhuang";
	}
	public function showCategory()
	{
		echo 'nv zhuang';
	}

}