<?php
if(isset($_POST['nombre']) && isset($_POST['apellido'])  && isset($_POST['edad'])  && isset($_POST['email'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];

}else{
    $error = "aiudaaaaaaaaaaaaaa";
    header("Location:index.php?error=$error");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>