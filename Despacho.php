<?php

class Despacho {
private $nombre = "";

public function getNombre() {
    return $this->$nombre;
}

public function setDespacho($nombre) {
    $this->nombre = $nombre;
}

}
?>