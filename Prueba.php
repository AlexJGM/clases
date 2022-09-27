<?php
include 'Ordenador.php';

$ordenador = new Ordenador("Windows", "4444");
$ordenador2 = new Ordenador("Linux", "3333");


echo $ordenador->Imprimir();

