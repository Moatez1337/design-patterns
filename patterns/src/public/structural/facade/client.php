<?php

$dvdPlayer = new DVDPlayer();
$amplifier = new Amplifier();
$projector = new Projector();

$homeTheater = new HomeTheaterFacade($dvdPlayer, $amplifier, $projector);

$homeTheater->watchMovie("Inception");
$homeTheater->endMovie();
