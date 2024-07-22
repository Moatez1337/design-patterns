<?php

require_once("Song.php");
class Song implements Music
{
    protected $name;
    public function play()
    {
        echo "Song " . $this->name ." playing!\n";
    }
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function getName(){
        echo $this->name;
    }

}