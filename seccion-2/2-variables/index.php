<?php
    // video 24, 25, 26, 27, 28, 29
    // ya sabemos que es una variable equisde
    $mi_variable =  "Hola mundo";
    $numero = 44;
    $verdadero = true;



    echo "<h1>". $mi_variable." desde una variable </h1>";
    echo $numero."<br>";
    $numero = 77;
    echo $numero."<br>";

    /*
        Tipos de datos:
        Entero (int / integer) 
        Coma flotante / decimales (float / double) = 3.45
        Cadena (string) = "tamarindo jjewjeje
        Boleano (bool) = true false
    */
    $variable = 455;
    echo gettype($variable)."<br>";
    $variable = "shalalalla";
    echo gettype($variable)."<br>";
    
    $variable = 23.2;
    echo gettype($variable)."<br>";
    $variable = true;
    echo gettype($variable)."<br>";

    // curiosidades
    var_dump($variable); // debugueo
    echo "Soy un texto lol $variable";
    echo 'Soy un texto más rápido lool '.$variable;

    // constantes
    define('nombre', 'Axel García');
    define('web', 'agarciadarce.codes');

    echo '<h1>'. nombre.'</h1>';

    // constantes predefinidas
    echo PHP_OS.'<br>';    
    echo __FILE__.'<br>'; 
    echo __LINE__.'<br>'; 
    
    ?>