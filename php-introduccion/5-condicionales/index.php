<?php
//    condicionales

/** Operadores de comparación 
 * == igual
 * === idéntico
 * != diferente
 * !== no idéntico
 * >,< mayor que, menor que
 * >=, <=, mayor igual que, menor igual que
 */


$color = "rojo";
if ($color == "rojo") {
    echo 'El color es rojo';
} else {
    echo 'El color no es rojo';
}
$color = "2019";
echo '<br/>';
if ($color == "2019") {
    echo 'El año es 2019 <br/>';
} else {
    echo 'El año no es 2019 <br/>';
}


// vídeo 37
// if anidados
$nombre = "David Extremadira";
$edad = 14;
$mayoria_edad = 18;
if ($edad > $mayoria_edad) {
    echo $nombre . " es mayor de edad <br/>";
} else if ($edad > 0) {
    echo $nombre . " no es mayor de edad <br/>";
} else {
    echo "Edad inválida<br/>";
}

$dia = 3;
switch ($dia) {
    case 1:
        echo "Lunes <br/>";
        break;
    case 2:
        echo "Martes <br/>";
        break;

    case 3:
        echo "Miercoles <br/>";
        break;

    case 4:
        echo "Jueves<br/>";
        break;

    default:
        echo "Fin de semana <br/>";
        break;
}
// uso de goto
goto marca;

echo "Fin de semana.";
echo "Fin de semana.";


marca: 
echo "uso de goto<br/>";