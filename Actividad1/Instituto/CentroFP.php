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

class CentroFP
{
    use Getter;
    use Setter;

    public $cod;
    public $nombre;


    public function __construct($cod, $nombre)
    {
        $this->cod = $cod;
        $this->nombre = $nombre;
    }
}

