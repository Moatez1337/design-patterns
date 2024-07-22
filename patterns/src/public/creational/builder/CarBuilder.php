<?php
require_once 'Car.php';
require_once 'Builder.php';
class CarBuilder implements Builder{
    private Car $car;
    public function reset()
    {
       $this->car = new Car();
    }

    public function setSeats($number)
    {
        $this->car->seatsNumber = $number;
    }

    public function setEngine($engine)
    {
        $this->car->engine = $engine;
    }

    public function setTripComputer()
    {
        $this->car->tripComputer = "trip computer";
    }

    public function setGPS()
    {
        $this->car->GPS = "new gps";
    }

    public function getResult(){
        var_dump($this->car);
        return $this->car;
    }

}
