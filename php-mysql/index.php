<?php 

$conexion = mysqli_connect("localhost", "agarciadarce", "Abcd.123", "phpmysql");

if(mysqli_connect_errno()){
    echo "La conexión a la base de datos MySQL ha fallado: ".mysqli_connect_error();
}
else{
    echo "Conexión hecha";
}

// tildes y signos especiales
mysqli_query($conexion, "SET NAMES 'uft8'");




$result = mysqli_query($conexion, "SELECT * FROM notas");

while ($nota = mysqli_fetch_assoc($result)) {
    
    echo "<h2>".$nota['titulo']."</h2>";
    echo "<p>".$nota['descripcion']."</p>";
}

$sql = "INSERT INTO notas (titulo,descripcion,color) VALUES ( 'Nota 3', 'Hacer los ejericicos de laravel','blue')";
$insert = mysqli_query($conexion, $sql);

if($insert){
    echo "Dato insertado correctamente";
}else{
    echo "Error: ".$insert;
}
?>

