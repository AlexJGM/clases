

<?php
include 'Ordenador.php';
$ordenador = new Ordenador("Windows", "4444", false);
$ordenador2 = new Ordenador("Linux", "3333", true);
$ordenador3 = new Ordenador("Mac", "2222", false);
$ordenador4 = new Ordenador("Windows", "5555", true);
$ordenadores = array($ordenador,$ordenador2,$ordenador3,$ordenador4);

$nombre = "ordenador.txt";
$archivo = fopen($nombre, "w");

foreach ($ordenadores as $i) {
    echo $i->imprimir();
    foreach ($ordenadores as $r) {
        $s = serialize($ordenadores);
        file_put_contents($nombre, $s);
        fwrite($archivo, $ordenadores . PHP_EOL);
    }

}
fclose($archivo);

/*
include 'Ordenador.php';
$nombre = "ordenador.txt";
$crear=fopen($nombre, "w");

$ordenador0=new ordenador("Windows","HZ4521",true);
$ordenador1=new ordenador("Linux","HZ7895",false);
$ordenador2=new ordenador("Windows","HZ1247",false);
$ordenador3=new ordenador("Mac","HZ0189",true);
$ordenador4=new ordenador("Ubuntu","HZ1045",true);


$ordenadores=array($ordenador0,$ordenador2,$ordenador3,$ordenador4);
foreach ($ordenadores as $ordenador) {
    $s = serialize($ordenador)."<br>";
    file_put_contents($nombre, $s);
    echo $ordenador->imprimir();
}
*/


?>