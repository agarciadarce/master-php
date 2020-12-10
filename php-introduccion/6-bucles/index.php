<?php
// bucles
// while
$numero = 0;
while ($numero <= 100) {
    echo $numero;
    if ($numero != 100) {
        echo ",";
    }
    $numero++;
}
echo "<hr/>";
if (isset($_GET['numero'])) { // isset determina si existe
    $numero = (int) $_GET['numero'];
} else {
    $numero = 1;
}
echo "<h1>Tabla de multiplicación del número: $numero</h1>";
$contador = 1;
while ($contador <= 10) {
    echo "$numero x $contador = " . ($contador * $numero) . "<br/>";
    $contador++;
}
echo "<hr/>";
    // do-while
$edad = 18;
$contador = 1;
do{
    echo "Tienes acceso al local privado: $contador <br/>";
    $contador++;
}while($edad >=18 && $contador <=10);

echo "<hr/>";

for ($i=0; $i < 10; $i++) { 
    echo 'Esta es una repitición';
    if($i == 4){
    break;
    }
}