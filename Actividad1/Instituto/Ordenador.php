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
    use Getter;
    use Setter;

    public $OS;
    public $cofHZ;
    public $esSobremesa;

    public function __construct($OS, $codHZ, $esSobremesa ) {
        $this->OS = $OS;
        $this->codHZ = $codHZ;
        $this->esSobremesa = $esSobremesa;
    }

}

echo (new Ordenador('Linux', 'x'))->OS;
echo (new Ordenador('Linux', 'x'))->codHZ;