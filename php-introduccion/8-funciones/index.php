<?php
// funciones
function muestraNombre()
{
    echo "Victor Robles <br/>";
    echo "Axel García <br/>";
    echo "<hr/>";
}


muestraNombre();
muestraNombre();

function tabla($numero)
{
    echo "<h1> Tabla de multiplicar del número: $numero</h1>";
    for ($i = 0; $i < 10; $i++) {
        $operacion = $numero * $i;
        echo "$numero x $i = $operacion <br/>";
    }
}
for ($i = 1; $i < 10; $i++) {
    tabla($i);
}

// ejemplo 3

function calculadora($numero1, $numero2, $negrita = false)
{
    $suma = $numero1 + $numero2;
    if ($negrita) {
        echo "<em>Resultado: " . $suma . "</em>";
    } else {
        echo "Resultado: " . $suma;
    }
    return true;
}
if(calculadora(1,2)){
    echo "xD";
}

$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

function holaMundo(){
    global $frase;
    echo "<h1>$frase</h1>";

}
holaMundo();

function funcion1 (){
    return "<h2>Tamarindo</h2>";
}
function funcion2 (){
    return "<h2>Pithaya</h2>";
}
function funcion3 (){
    return "<h2>Guanabana</h2>";
}
$funcion = "1";
//echo $funcion();

$miFuncion = "funcion".$funcion;

echo $miFuncion();
?>