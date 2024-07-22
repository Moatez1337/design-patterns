<?php
require_once 'Phone.php';
class AndroidPhone extends Phone{

    protected string $number;
    private bool $hasTouchScreen = true;
    public function call()
    {
        echo "android call" . $this->number;
    }
    protected function setNumber($number)
    {
        $this->number = $number;
    }

}
