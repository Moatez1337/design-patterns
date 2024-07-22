<?php

require_once 'Decorator.php';

class ConcreteDecorator extends Decorator
{

    public function getAuthor(): string
    {
        $mystr = parent::getAuthor(). "decorated";
        echo $mystr;
        return $mystr . "decorated";
    }


}