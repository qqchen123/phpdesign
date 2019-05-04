<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/5/4
 * Time: 2:06 PM
 */

namespace Imooc;


class ColorDrawDecorator implements DrawDecorator {
	protected $color;
	public function __construct($color='red')
	{
		$this->color = $color;
	}

	function beforedraw(){
		echo "<div style='color: {$this->color}'>";
	}
	function afterdraw(){
		echo "</div>";
	}
}