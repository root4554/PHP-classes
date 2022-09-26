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

class Docente extends Persona
{
    use Getter;
    use Setter;

    public $sueldo;

    public function __construct($nombre, $dni, $email, $sueldo)
    {
        parent::__construct($nombre, $dni, $email);
        $this->sueldo = $sueldo;
    }
    
}

