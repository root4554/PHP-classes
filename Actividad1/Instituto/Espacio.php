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

abstract class Espacio
{
    use Getter;
    use Setter;

    public $puntoWifi;
    public $puntosRed;


    public function __construct($puntoWifi, $puntosRed)
    {
        $this->puntoWifi = $puntoWifi;
        $this->puntosRed = $puntosRed;
    }
    
}

