<?php

require_once 'Computer.php';
class LenovoComputer extends Computer
{
    protected $type = 'Lenovo';
    protected $keyboard = 'keyboard';
    protected $touchpad = 'touchpad';

    public function __construct($type)
    {
        $this->type = $type;
    }
}