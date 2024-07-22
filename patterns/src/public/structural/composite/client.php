<?php

require_once 'Music.php';
require_once 'Song.php';
require_once 'Playlist.php';


$mySong = new Song("Homies in Paris");
$mySong->play();
$mySong->getName();
$secondSong = new Song("Homies in Paris 2");
$myPlaylist = new Playlist();
$myPlaylist->addSong($mySong);
$myPlaylist->addSong($secondSong);
$myPlaylist->play();

