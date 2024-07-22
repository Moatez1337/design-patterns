<?php

require_once 'Computer.php';
class MacComputer extends Computer
{
    protected $type = 'mac';
    protected $keyboard = 'keyboard';
    protected $touchpad = 'touchpad';

    public function __construct($type)
    {
        $this->type = $type;
    }
}