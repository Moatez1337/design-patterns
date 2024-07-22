<?php


abstract class Phone {
    protected string $number;
    public abstract function call();
    protected abstract function setNumber(string $number);
    public function __construct(string $number) {
        $this->number = $number;
    }

}