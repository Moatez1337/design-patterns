<?php


abstract class Car
{

    protected $color;
    public function __construct($color)
    {
        $this->color = $color;
    }
    abstract public function paint();

}