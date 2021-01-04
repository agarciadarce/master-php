<?php
$error = "";
if(!empty($_POST['nombre']) && !empty($_POST['apellido'])  && !empty($_POST['edad'])  && !empty($_POST['email'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    if(!is_string($nombre) || preg_match("/[0-9]+/", $nombre)){
        $error = $error."Nombre incorrecto<br>";
    }
    if(!is_string($apellido) || preg_match("/[0-9]+/", $apellido)){
        $error = $error."Apellido incorrecto<br>";
    }
    if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
        $error = $error."Edad incorrecta<br>";
    }
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = $error."Email incorrecto<br>";
    }
    
}else{
    $error = $error."aiudaaaaaaaaaaaaaa";
    
}
var_dump($error);
header("Location:index.php?error=$error");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($error == "ok"): ?>
        <p><?=$nombre?> </p>
        <p><?=$apellido?> </p>
        <p><?=$edad?> </p>
        <p><?=$email?> </p>
    <?php endif; ?>
</body>
</html>