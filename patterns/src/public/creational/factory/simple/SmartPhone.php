<?php
require_once 'Phone.php';
class SmartPhone extends Phone{

    protected string $number;
    private bool $hasTouchScreen = true;
    public function call()
    {
        echo "smart call" . $this->number;
    }
    protected function setNumber($number)
    {
        $this->number = $number;
    }

}