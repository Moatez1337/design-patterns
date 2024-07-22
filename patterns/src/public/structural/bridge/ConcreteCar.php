<?php


class concreteCar extends Car
{
    public function paint()
    {
        echo "painting with " . $this->color;
    }
}