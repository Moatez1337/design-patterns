<?php

require_once 'Manual.php';
require_once 'Builder.php';
class CarManualBuilder extends \CarBuilder implements Builder{
    private Manual $manual;
    public function reset()
    {
       $this->manual = new Manual();
    }

    public function setSeats($number)
    {
        $this->manual->seatsNumber = $number;
    }

    public function setEngine($engine)
    {
        $this->manual->engine = $engine;
    }

    public function setTripComputer()
    {
        $this->manual->tripComputer = "trip computer";
    }

    public function setGPS()
    {
        $this->manual->GPS = "new gps";
    }
    #
    public function getResult(){
        var_dump($this->manual);
        return $this->manual;
    }

}