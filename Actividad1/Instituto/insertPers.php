<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        <input name="nombre" type="text" placeholder="Nombre">
        <input name="DNI" type="text" placeholder="DNI">
        <input name="email" type="text" placeholder="Email">
        <input type="submit" value="Guardar" name="accion">
        <input type="submit" value="Borrar" name="accion">
        <input type="submit" value="Editar" name="accion">
        <input type="submit" value="Mostrar" name="accion">
        <input type="submit" value="Ocultar" name="accion">
    </form>

    <?php

    use Instituto\Persona;

    include 'Persona.php';
    
    //********* FUNCTIONS ********* */
    //buscar si existe el dni
    function buscarPersona($personas, $dni)
    {
        foreach ($personas as $persona) {
            if ($persona->dni == $dni) {
                //echo "Persona encontrada";
                return $persona;
            }
        }
        return null;
    }

    //guardar una persona en un array de personas
    function guardarPersona($personas)
    {
        if (isset($_GET['nombre']) && isset($_GET['DNI']) && isset($_GET['email'])) {
            if (!buscarPersona($personas, $_GET['DNI'])) {

                $nuevapersona = new Persona($_GET['nombre'], $_GET['DNI'], $_GET['email']);
                $nuevapersona->printHTml();
                $personas[] = $nuevapersona;
                echo '<script>alert("Has guardado la persona correctamente")</script>';
                Persona::guardarPersonas('ListaPersonas.txt', $personas);
            } else {
                echo '<script>alert("Ya Existe una persona con este DNI")</script>';
            }
        }
    }

    //borrar una persona de un array de personas
    function borrarPersona($personas)
    {
        if (isset($_GET['DNI'])) {
            if (buscarPersona($personas, $_GET['DNI'])) {
                $persona = buscarPersona($personas, $_GET['DNI']);
                Persona::borrarPersona($personas, $persona->dni);
                echo '<script>alert("Has borrado la persona correctamente")</script>';
            } else {
                echo '<script>alert("No existe una persona con este DNI")</script>';
            }
        }
    }

    $personas = Persona::leerPersonas("ListaPersonas.txt");

    //The null coalescing operator (??) has been added as syntactic sugar
    // for the common case of needing to use a ternary in conjunction with isset()
    $accion = $_GET['accion'] ?? null;
    switch ($accion) {
        case "Guardar":
            guardarPersona($personas);
            break;
        case "Borrar":
            borrarPersona($personas);
            break;
    }

    //imprimir datos
    if ($personas != null) {
        foreach ($personas as $persona) {
            echo $persona->printHTml();
        }
    } else {
        echo "<p style='color:red;'>No hay personas</p>";
    }
    ?>
</body>

</html>