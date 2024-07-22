<?php

require_once 'Music.php';
require_once 'Song.php';
class Playlist implements Music
{
    private array $songs;
    public function play()
    {
        foreach ($this->songs as $song) {
            echo $song->getName() . "playing";
        }
    }
    public function addSong(Music $song)
    {
        $this->songs[] = $song;
    }
    public function removeSong(Music $song)
    {
        unset($this->songs[array_search($song, $this->songs)]);
    }
}