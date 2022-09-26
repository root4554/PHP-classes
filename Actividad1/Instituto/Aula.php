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
class Aula extends Espacio
{
    use Getter;
    use Setter;
    
    public $numero;
    public $proyector;
    public $pizarraDigital;
    public $pantallaTactil; 

    public function __construct($puntoWifi, $puntosRed, $numero, $proyector, $pizarraDigital, $pantallaTactil)
    {
        parent::__construct($puntoWifi, $puntosRed);
        $this->numero = $numero;
        $this->proyector = $proyector;
        $this->pizarraDigital = $pizarraDigital;
        $this->pantallaTactil = $pantallaTactil;
    }
    

}

