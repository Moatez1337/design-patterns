<?php
require_once 'Phone.php';
class NormalPhone extends Phone
{
    protected string $number;
    private bool $hasTouchScreen = false;
    public function call()
    {
        echo "old call" . $this->number;
    }

    protected function setNumber(string $number)
    {
        $this->number = $number;
    }
}