<?php

require_once 'Car.php';
class SportCar implements CarInterface
{

    private $instance;

    public function __construct(){
        $this->instance = new Car();
    }

    public function startEngine()
    {
        $this->instance->startEngine();
    }

    public function stopEngine()
    {
        $this->instance->stopEngine();
    }
}