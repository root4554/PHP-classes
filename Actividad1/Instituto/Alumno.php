<?php
namespace Instituto;

trait Getter{
    public function __get($name) {
        return $this->$name;
    }
}
trait Setter{
    public function __set($name, $value){
        $this->$name = $value;
    }
}

class Alumno extends Persona
{
    use Getter;
    use Setter;
    
    public $codMatricula;
    public $ciclo;

    public function __construct($nombre, $dni, $email, $codMatricula,  $ciclo)
    {
        parent::__construct($nombre, $dni, $email);
        $this->ciclo = $ciclo;
        $this->codMatricula = $codMatricula;
    }

    
}

