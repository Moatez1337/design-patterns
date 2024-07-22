<?php

class BlackColor implements Color
{
    protected $color;
    public function applyColor()
    {
        echo "black color";
        $this->color = "black";
    }
}