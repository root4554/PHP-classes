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

    public function imprimir() {
        echo "<p>Sistema operativo:<b>&emsp;$this->OS</b></p>";
        echo "<p> codigo de pc es:<b>&emsp;$this->codHZ</b></p>";
        echo "<p> Es sobremesa:<b>&emsp;$this->esSobremesa</b></p>";
    }
   
        
}


//echo (new Ordenador('Linux', 'x'))->OS;
//echo (new Ordenador('Linux', 'x'))->codHZ;