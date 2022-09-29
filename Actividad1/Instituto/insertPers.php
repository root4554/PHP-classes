<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form >
            <input name="nombre" type="text" placeholder="Nombre">
            <input name="DNI" type="text" placeholder="DNI">
            <input name="email" type="text" placeholder="Email">
            <input type="submit" value="Guardar">
            <input type="submit" value="Borrar">
            <input type="submit" value="Cancelar">
        </form>
        <?php
            use Instituto\Persona;

include 'Persona.php';
$personas=Persona::leerPersonas("ListaPersonas.txt");
if($personas!=null){
        //imprimir datos
        foreach($personas as $persona){
            echo $persona->printHTml();
        }
}else{
    echo "<p style='color:red;'>No hay personas</p>";}
        

            if( isset($_GET['nombre']) && isset($_GET['DNI']) && isset($_GET['email']) ){
                $nuevapersona = new Persona($_GET['nombre'], $_GET['DNI'], $_GET['email']);
                $nuevapersona->printHTml();
                $personas[] = $nuevapersona;
                //array_push($personas, $nuevapersona);
                Persona::guardarPersonas('ListaPersonas.txt',$personas);

            }
            ?>
</body>
</html>
