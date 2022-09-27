<?php

    include 'Ordenador.php';

    $ordenador1 = new Ordenador('Win10', 'HZ123456789', true);
    $ordenador2 = new Ordenador('Linux', 'HZ987654321', true);

    $ordenadores = [$ordenador1, $ordenador2];

    echo $ordenador1->OS;
    echo $ordenador1->codHZ;
    echo $ordenador1->esSobremesa;

    
    $ordenador1->imprimir();

    // $ordenadores = [$ordenador1, $ordenador2];

    // $aula1 = new Aula(true, 0, 1, true, true, true);

    // $aula1->addOredenadores($ordenadores);
