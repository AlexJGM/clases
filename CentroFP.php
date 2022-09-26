<?php
class CentroFP {
    private $cod = "";
    private $nombre = "";
    
    public function setCentroFP($cod, $nombre) {
        $this->cod = $cod;
        $this->nombre = $nombre;
        
    }
    
    public function get_cod() {
        return $this->cod;
    }
    
    public function get_nombre() {
        return $this->nombre;
    }
    
}

?>