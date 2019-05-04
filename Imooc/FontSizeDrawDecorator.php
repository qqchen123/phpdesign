<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/5/4
 * Time: 2:12 PM
 */

namespace Imooc;

class FontSizeDrawDecorator
{
    protected $fontsize;
    public function __construct($fontsize = '14px')
    {
        $this->fontsize = $fontsize;
    }

    public function beforedraw()
    {
        echo "<div style='font-size: {$this->fontsize}'>";
    }
    public function afterdraw()
    {
        echo '</div>';
    }
}
