<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/5/4
 * Time: 1:15 PM
 */

namespace Imooc;

class Canvas
{
    public $data;
    public $decorators = [];

    public function init($width = 20, $height = 10)
    {
        $data = [];
        for ($i = 0;$i < $height;$i++) {
            for ($j = 0;$j < $width;$j++) {
                $data[$i][$j] = '*';
            }
        }
        $this->data = $data;
    }

    public function draw()
    {
        $this->beforedraw();
        foreach ($this->data as $line) {
            foreach ($line as $char) {
                echo $char;
            }
            echo '<br />';
        }
        $this->afterdraw();
    }
    public function rect($a1, $a2, $b1, $b2)
    {
        foreach ($this->data as $k1 => $line) {
            if ($k1 < $a1 or $k1 > $a2) {
                continue;
            }
            foreach ($line as $k2 => $char) {
                if ($k2 < $b1 or $k2 > $b2) {
                    continue;
                }
                $this->data[$k1][$k2] = '&nbsp;';
            }
        }
    }

    public function addDecorator(DrawDecorator $decorator)
    {
        $this->decorators[] = $decorator;
    }

    public function beforedraw()
    {
        foreach ($this->decorators as $decorator) {
            $decorator->beforedraw();
        }
    }
    public function afterdraw()
    {
        $decorator = array_reverse($this->decorators);
        foreach ($decorator as $decorator) {
            $decorator->afterdraw();
        }
    }
}
