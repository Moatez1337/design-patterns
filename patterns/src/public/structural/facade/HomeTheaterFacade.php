<?php

class HomeTheaterFacade
{
    private $dvdPlayer;
    private $amplifier;
    private $projector;

    public function __construct(DVDPlayer $dvdPlayer, Amplifier $amplifier, Projector $projector)
    {
        $this->dvdPlayer = $dvdPlayer;
        $this->amplifier = $amplifier;
        $this->projector = $projector;
    }

    public function watchMovie($movie)
    {
        echo "Get ready to watch a movie...\n";
        $this->projector->on();
        $this->amplifier->on();
        $this->amplifier->setVolume(5);
        $this->dvdPlayer->on();
        $this->dvdPlayer->play($movie);
    }

    public function endMovie()
    {
        echo "Shutting down the movie theater...\n";
        $this->dvdPlayer->off();
        $this->amplifier->off();
        $this->projector->off();
    }
}
