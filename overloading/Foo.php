<?php

class Shape
{
    function __call($name, $arg) {
        if($name == 'area') {
            switch(count($arg)) {
                default:
                    return 0;
                case 1:
                    return 3.1416 * $arg[0] * $arg[0];
                case 2:
                    return $arg[0] * $arg[1];
            }
        }
    }
}

?>