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
    public function addOredenador(Ordenador $ordenador)
    {
        if($this->puntosRed < 10){
            $this->puntosRed++;
            $this->ordenadores[] = $ordenador;
        }
        else "<h3 style='color:red'>El aula está llena</h3>";
    }
    public function addOredenadores(array $ordenadores)
    {
        foreach($ordenadores as $ordenador)
        {
            $this->addOredenador($ordenador);
        }
    }

}

    



