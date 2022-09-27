<?php

class Ordenador {
    private $SO="";
    private $CodHZ;
    /* @return string
    */
    public function getSO()
    {
        return $this->SO;
    }
    
    /*
     *  @return mixed
    */
    public function getCodHZ()
    {
        return $this->CodHZ;
    }
    
    /* @param string $SO
    */
    public function setSO($SO)
    {
        $this->SO = $SO;
    }
    
    /* @param mixed $CodHZ
    */
    public function setCodHZ($CodHZ)
    {
        $this->CodHZ = $CodHZ;
    }
    
    
}

?>