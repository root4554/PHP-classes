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

class Ordenador {
    use Getter, Setter;
    

    public $OS;
    public $cofHZ;
    public bool $esSobremesa;

    public function __construct($OS, $codHZ, bool $esSobremesa ) {
        $this->OS = $OS;
        $this->codHZ = $codHZ;
        $this->esSobremesa = $esSobremesa;
    }

    public imprimir(){
        foreach($Ordenador as $key => $value){
            echo "$key => $value <br>";
        }
    }

}


//echo (new Ordenador('Linux', 'x'))->OS;
//echo (new Ordenador('Linux', 'x'))->codHZ;