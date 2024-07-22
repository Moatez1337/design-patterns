<?php

require_once 'Director.php';
require_once 'CarManualBuilder.php';
require_once 'CarBuilder.php';

$dir = new Director();
$carBuild = new CarBuilder();
$carManualBuild = new CarManualBuilder();
$dir->makeSportsCar($carBuild);
$dir->makeSUV($carManualBuild);