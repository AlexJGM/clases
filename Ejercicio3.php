<?php
include 'Ordenador.php';

$ordenador = new Ordenador("Windows", "4444", false);
$ordenador2 = new Ordenador("Linux", "3333", true);
$ordenador3 = new Ordenador("Mac", "2222", false);
$ordenador4 = new Ordenador("Windows", "5555", true);

$ordenadores = array($ordenador,$ordenador2,$ordenador3,$ordenador4);

echo '<table border="1px">';
foreach ($ordenadores as $i) {
    echo "<tr><td>";
    echo $i->imprimir();
    echo "</tr></td>";
}
echo "</table>";


?>