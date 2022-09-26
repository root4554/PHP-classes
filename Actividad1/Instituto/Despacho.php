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

class Despacho extends Espacio
{
    use Getter;
    use Setter;

    public $nombre;

    public function __construct($puntoWifi, $puntosRed, $nombre)
    {
        parent::__construct($puntoWifi, $puntosRed);
       $this->nombre = $nombre; 
    }
}

