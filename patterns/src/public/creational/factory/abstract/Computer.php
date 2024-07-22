<?php


abstract class Computer
{
    protected $touchpad;
    protected $keyboard;
    protected $type;

    public function compute()
    {
        echo $this->type . " computing ...";
    }
}