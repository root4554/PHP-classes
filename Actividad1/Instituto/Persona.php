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
    // public function printHtml(){

    //     echo "<p>Nombre: $this->nombre</p>";
    //     echo "<p>DNI: $this->dni</p>";
    //     echo "<p>Email: $this->email</p>";
    // }
    public function printHtml(){
        echo "<table border='1'>";
        echo "<tr><td>Nombre</td><td>DNI</td><td>Email</td></tr>";
        echo "<tr><td>$this->nombre</td><td>$this->dni</td><td>$this->email</td></tr>";
    }


    public function toHtml(){
        return "<p>Nombre: $this->nombre</p>
        <p>DNI: $this->dni</p>
        <p>Email: $this->email</p>";
    }
    //srializar un array de personas y guardar en un fichero
    public static function guardarPersonas($fichero, $personas){
        $s = serialize($personas);
        file_put_contents($fichero, $s);
    }
    //leer un fichero y deserializarlo en un array de personas
    public static function leerPersonas($fichero){
        $c = file_get_contents($fichero);
        $personas = unserialize($c);
        return $personas;
    }
    //Borrar una persona de un array de personas
    public static function borrarPersona($personas, $dni){
        $personas = array_filter($personas, function($persona) use ($dni){
            return $persona->dni != $dni;
        });
        guardarPersonas("personas.txt", $personas);
        return $personas;
    }

    //modificar una persona de un array de personas
    public static function modificarPersona($personas, $dni, $nombre, $email){
        $personas = array_map(function($persona) use ($dni, $nombre, $email){
            if($persona->dni == $dni){
                $persona->nombre = $nombre;
                $persona->email = $email;
            }
            return $persona;
        }, $personas);
        guardarPersonas("personas.txt", $personas);
        return $personas;
    }

    //mostrar personas
    public static function mostrarPersonas($personas){
        foreach($personas as $persona){
            $persona->printHtml();
        }
    }
}

