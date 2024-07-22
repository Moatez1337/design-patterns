<?php
class Amplifier {
    public function on() {
        echo "Amplifier is on.\n";
    }
    public function setVolume($level) {
        echo "Setting volume to: $level.\n";
    }
    public function off() {
        echo "Amplifier is off.\n";
    }
}