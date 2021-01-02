<?php
    $cantantes = ['Yo', 'Jesed', 'Cristian', 'José José'];
    asort($cantantes);
    var_dump($cantantes);
    echo "<br/>";
    sort($cantantes);
    var_dump($cantantes);

    // agregar elementos
    $cantantes[] = "Dimensión minúscula";
    array_push($cantantes, "Waor");
    
    array_pop($cantantes);
    echo "<br/>";

    // unset para eliminar
    // array_rand
    
    var_dump($cantantes);
    echo "<br/>";
    var_dump(array_reverse($cantantes));
    var_dump(array_search('XD', $cantantes));


?>