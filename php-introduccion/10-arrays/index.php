<?php 

$peliculas = array('Batman', 'Spiderman', 'Wonderwoman', 'Ironman');
var_dump($peliculas);
var_dump($peliculas[0]);
echo "<br/>";

$cantantes = ['Yo', 'Jesed', 'Cristian', 'José José'];
var_dump($cantantes);

echo "<br/>";

var_dump($cantantes[0]);

echo "<br/>";

for ($i=0; $i < count($peliculas); $i++) { 
    echo $peliculas[$i]."<br/>";
}
foreach ($peliculas as $pelicula) {
    echo $pelicula."<br/>";
}


$personas = array(
    'nombre' => 'Axel',
    'apellidos' => 'García',
    'web' =>'agarciadarce.codes'
);
var_dump($personas);
var_dump($personas['nombre']);

$contactos = array(
    array(
        'nombre' => 'Axel',
        'apellidos' => 'García',
        'web' =>'agarciadarce.codes'
    ),
    array(
        'nombre' => 'Maira',
        'apellidos' => 'Medrano',
        'web' =>'maira.medrano'
    )
);
var_dump($contactos);

foreach ($contactos as $key => $contacto) {
    var_dump($contacto);
    echo "<br/>";
}

?>