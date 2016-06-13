<?php
/**
 * Created by PhpStorm.
 * User: zcluo
 * Date: 2016/6/12
 * Time: 14:13
 */

namespace emmaluo;


class A
{
    function foo()
    {
        if(isset($this)){
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        }
        else{
            echo "\$this is not defined.\n";
        }
    }
}