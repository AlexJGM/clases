<?php

class Espacio {
    private $puntoWifi = false;
    private $puntoRed = 0;
    
    public function setEspacio($puntoWifi, $puntoRed) {
        $this->puntoWifi = $puntoWifi;
        $this->puntoRed = $puntoRed;
    }
    
    public function getPuntoWifi() {
        return $this->puntoWifi;
    }
    
    public function getPuntoRed() {
        return $this->puntoRed;
    }
    
}
?>
