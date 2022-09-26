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
class Persona
{   
    use Getter;
    use Setter;

    public $nombre;
    public $dni;
    public $email;

    public function __construct($nombre, $dni, $email)
    {
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->email = $email;
    }
}

