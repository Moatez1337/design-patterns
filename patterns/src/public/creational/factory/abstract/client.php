<?php

require_once 'LenovoComputerFactory.php';
require_once 'MacComputerFactory.php';

$lenovoComputer = LenovoComputerFactory::getType('Lenovo');
$lenovoComputer->compute();
$macComputer = MacComputerFactory::getType('Mac');
$macComputer->compute();