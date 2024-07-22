<?php
require_once 'CarBuilder.php';

class Director{


public function makeSportsCar(CarBuilder $builder){
    $builder->reset();
    $builder->setEngine("fast engine");
    $builder->setSeats(2);
    $builder->setGPS();
    $builder->getResult();

}
    public function makeSUV(CarBuilder $builder){
        $builder->reset();
        $builder->setEngine("big engine");
        $builder->setSeats(7);
        $builder->setGPS();
        $builder->getResult();

    }


}