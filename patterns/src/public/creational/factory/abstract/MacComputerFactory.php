<?php

require_once 'ComputerFactory.php';
require_once 'MacComputer.php';
class MacComputerFactory implements ComputerFactory
{
    public static function getType($type)
    {
        if ($type == "Mac") {
            return new MacComputer($type);
        }
    }
}