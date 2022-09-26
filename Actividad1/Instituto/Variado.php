<?php
namespace Instituto;

trait Getter {
    public function __get($name) {
        return $this->$name;
    }
}
trait Setter{
    public function __set($name, $value) {
        $this->$name = $value;
    }
}

class Variado extends Espacio
{
    use Getter;
    use Setter;

    public $tipo;


    public function __construct($puntoWifi, $puntosRed, $tipo)
    {
        parent::__construct($puntoWifi, $puntosRed);
        $this->tipo = $tipo;
    }
}

