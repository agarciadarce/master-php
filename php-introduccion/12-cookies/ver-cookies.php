<?php

if(isset($_COOKIE['galleta'])){
    echo "<h1>".$_COOKIE['galleta']."</h1>";
}else{
    echo "No existe la cookie";
}

if(isset($_COOKIE['oneyear'])){
    echo "<h1>".$_COOKIE['oneyear']."</h1>";
}else{
    echo "No existe la cookie";
}
?>
<a href="borrar-cookies.php">Borrar galletas</a>
<a href="crear-cookies.php">Crear galletas</a>