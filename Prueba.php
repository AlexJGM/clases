<?php
include 'Ordenador.php';

$ordenador = new Ordenador("Windows", "4444", false);
$ordenador2 = new Ordenador("Linux", "3333", true);

$ordenadores = array(new Ordenador("windows", "3333", false),new Ordenador("Linux", "3333", true), new Ordenador("Mac", "2222", false));
print_r($ordenadores);

/*
 $ordenadores[] = new Ordenador("windows", "4444", false);
 $ordenadores[] = new Ordenador("Linux", "3333", true);
 $ordenadores[] = new Ordenador("Mac", "2222");
 
 print_r($ordenadores);
 */
echo $ordenador2->imprimir();
echo $ordenador->imprimir();