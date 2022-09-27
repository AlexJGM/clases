<?php
include 'Persona.php';
class Alumno extends Persona{
    private $codMatricula ="";
    private $ciclo ="";
    private $docente;
    
    
    function __construct($_name,$_dni,$_email,$_codMatricula,$_ciclo) {
        parent::__construct($_name, $_dni, $_email);
        $this->codMatricula=$_codMatricula;
        $this->ciclo=$_ciclo;
    }
    
    /*  function __construct($_name,$_dni,$_email) {
     parent::__construct($_name, $_dni, $_email);
     }
     */
    
    public function setCodMatricula($codMatricula)
    {
        $this->codMatricula = $codMatricula;
    }
    
    public function setCiclo($ciclo)
    {
        $this->ciclo = $ciclo;
    }
    
    public function get_Cod() {
        return $this->CodMatricula;
    }
    
    public function get_ciclo() {
        return $this->ciclo;
    }
 
    /**
     * @return mixed
     */
    public function getDocente()
    {
        return $this->docente;
    }
    
    /**
     * @param mixed $docente
     */
    public function setDocente($docente)
    {
        $this->docente = $docente;
    }
        
}

$alumno = new Alumno();

$alumno->setName("Luis");
$alumno->setDni("3234234D");
$alumno->setEmail("a@gmail.com");
$alumno->setCodMatricula("23123S");
$alumno->setCiclo("Informatica");

echo $alumno->getName();
echo $alumno->getDni();
echo $alumno->getEmail();
echo $alumno->get_Cod();
echo $alumno->get_ciclo();

?>