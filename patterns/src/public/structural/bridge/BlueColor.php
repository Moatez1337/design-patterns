<?php

class BlueColor implements Color
{
    protected $color;
    public function applyColor()
    {
        echo "blue color";
        $this->color = "blue";
    }
}