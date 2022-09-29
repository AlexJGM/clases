<?php

    class Ordenador {
        private $SO="";
        private $CodHZ="";
        private $esSobreMesa = false;
        private $despacho;
        
        
        function sobremesa() {
            if ($esSobreMesa = true) {
                echo "SobreMesa";
            } elseif ($esSobreMesa = false) {
                echo "Portatil";
            }
        }
        
        function __construct($_SO,$_CodHZ,$_esSobreMesa) {
            $this->SO=$_SO;
            $this->CodHZ=$_CodHZ;
            $this->esSobreMesa=$_esSobreMesa;
        }
        /**
         * @return string
         */
        public function getSO()
        {
            return $this->SO;
        }
        
        /**
         * @return mixed
         */
        public function getCodHZ()
        {
            return $this->CodHZ;
        }
        
        public function getesSobreMesa() {
            return $this->esSobreMesa;
        }

        /**
         * @param string $SO
         */
        public function setSO($SO)
        {
            $this->SO = $SO;
        }
        
        /**
         * @param mixed $CodHZ
         */
        public function setCodHZ($CodHZ)
        {
            $this->CodHZ = $CodHZ;
        }
        
        public function setesSobreMesa($esSobreMesa) {
            $this->esSobreMesa = $esSobreMesa;
        }
        
        
        
        public function imprimir(){
            return "<h1>".$this->SO."</h1>"
                ."<h2>".$this->CodHZ."</h2>"
                    .($this->esSobremesa ?"<h3 style='color:green'>VERDADERO</h3>" :"<h3 style='color:red'>FALSO</h3>");
        }
        
        
    }

    
?>