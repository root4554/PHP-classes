<?php

    use Instituto\Ordenador;

    include 'Ordenador.php';
 
    $ordenador1 = new Ordenador('Win10', 'HZ123456789', true);
    $ordenador2 = new Ordenador('Linux', 'HZ987654321', false);

    $ordenadores = [$ordenador1, $ordenador2];

    ////////////////////////////////////////
    //pruebaOrdenador1.php
      $ordenador2->imprimir();



    /////////////////////////////////////////
     //pruebaOrdenador2.php
     foreach($ordenadores as $ordenador){
         $ordenador->imprimir();
     }



    /////////////////////////////////////////
    //pruebaOrdenador3.php
    foreach($ordenadores as $ordenador){
        echo "<table border='1'>";
        echo "<tr><td><b>Ordenador</b></td></tr>";
        echo "<tr><td>Sistema operativo</td><td>$ordenador->OS</td></tr>";
        echo "<tr><td>Codigo de pc</td><td>$ordenador->codHZ</td></tr>";
        echo "<tr><td>Es sobremesa</td><td>$ordenador->esSobremesa</td></tr>";
        echo "</table>";
    }

    /////////////////////////////////////////
    





