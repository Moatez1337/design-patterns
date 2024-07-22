<?php

require_once 'LenovoComputer.php';
require_once 'ComputerFactory.php';
class LenovoComputerFactory implements ComputerFactory
{
    public static function getType($type)
    {
        if ($type == "Lenovo") {
            return new MacComputer($type);
        }
    }
}